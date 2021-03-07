<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Imports\InventoryImport;
use App\Http\Requests\VehicleForm;
use App\Inventory;
use App\Image;
use Maatwebsite\Excel\Facades\Excel;
use InterventionImage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $inventory = Inventory::with(['images'])->orderBy('created_at', 'desc')->paginate(10);

      return view('home', ['inventory' => $inventory]);
    }

    /**
     * Show the add vehicle page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addVehicle()
    {
      return view('addVehicle');
    }

    /**
     * Show the edit vehicle page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editVehicle($id)
    {
      $vehicle = Inventory::with(['images'])->where('id', $id)->first();

      return view('editVehicle', ['vehicle' => $vehicle]);
    }

    public function saveVehicle(VehicleForm $request)
    {
      // Fill vehicle
  		$vehicle = new Inventory;
      $vehicle->fill(request()->except('images'));
  		// Save vehcile
  		if(! $vehicle->save()){
  			// Return error is save didnt work
        return back()->with('error', 'Could not save vehicle!')->withInput();
  		}

      // Handle images
      if($images = request()->file('images')) {
        // Only 9 images allowed per vehicle
        if(count($vehicle->images) < 9){
          forEach($images as $img){
            $name = uniqid() . '.' . $img->getClientOriginalExtension();
            $targetPath = storage_path('app/public/images/');
            if($img->move($targetPath, $name)) {
                // save file name in the database
                Image::create(['inventory_id' => $vehicle->id, 'src' => $name]);
            }
          }
        } else{
          return back()->with('error', 'Only 9 images per vehicle can be uploaded!')->withInput();
        }
      }// if images

      $vehicle->refresh();

      return redirect('/edit-vehicle/'.$vehicle->id)->with('success', 'Vehicle has been updated!')->with('vehicle', $vehicle);
    }

    public function updateVehicle(VehicleForm $request)
    {
      // Find vehicle
  		$vehicle = Inventory::with(['images'])->findOrFail(request()->id);
      // Fill vehicle
  		$vehicle->fill(request()->all());
  		// Save vehcile
  		if(! $vehicle->save()){
  			// Return error is save didnt work
        return back()->with('error', 'Could not save vehicle!')->withInput();
  		}

      // Handle images
      if($images = request()->file('images')) {
        // Only 9 images allowed per vehicle
        if(count($vehicle->images) < 9){
          forEach($images as $img){
            $name = uniqid() . '.' . $img->getClientOriginalExtension();
            $targetPath = storage_path('app/public/images/');
            if($img->move($targetPath, $name)) {
                // save file name in the database
                Image::create(['inventory_id' => $vehicle->id, 'src' => $name]);
            }
          }// foreach
          /*forEach($images as $img){
            $name = uniqid() . '.' . $img->getClientOriginalExtension();
            $targetPath = storage_path('app/public/images/');
            // Store image
            if($img->move($targetPath, $name)) {
              // save file name in the database
              Image::create(['inventory_id' => $vehicle->id, 'src' => $name]);
              // Resize image
              $image = InterventionImage::make($targetPath . $name);
              $image->resize(1024, null, function ($constraint) {
                $constraint->aspectRatio();
              })->save($targetPath . $name);
            }
          }*/

        } else{
          return back()->with('error', 'Only 9 images per vehicle can be uploaded!')->withInput();
        }
      }// if images

      $vehicle->refresh();

      return redirect('/edit-vehicle/'.$vehicle->id)->with('success', 'Vehicle has been updated!')->with('vehicle', $vehicle);
    }

    public function removeVehicles(Request $request)
    {
      forEach(request()->vehicles as $vhcId){
        // Ensure key is a number
        if(is_numeric($vhcId)){

          $vhc = Inventory::with(['images'])->find($vhcId);
          $vhcImages = $vhc->images;

          // Remove vehicles images
          forEach($vhcImages as $img){
            // Save image src
            $src = $img->src;
            // Remove image db entry
            if($img->delete()){
              // Remove image from dir
              if(!unlink(storage_path() . '/app/public/images/' . $src)){
                // Return error
                return back()->with('error', 'Problem unlinking image!');
              }
            } else{
              // Return error
              return back()->with('error', 'Problem removing image from db!');
            }
          }

          // Remove vehicle db entry
      		if(!$vhc->delete()){
            // Return success
            return back()->with('error', 'Problem removing vehicle from db!');
      		}
        }
      }

      // Success
      return back()->with('success', 'Vehicles have been removed!');
    }

    public function removeImages(Request $request)
    {
      forEach(request()->toRemove as $imgId){
        // Ensure key is a number
      	if(is_numeric($imgId)){
      		// Find image
      		$img = Image::find($imgId);
          $src = $img->src;
      		// Remove image db entry
      		if($img->delete()){
            // Remove image from dir
            if(!unlink(storage_path() . '/app/public/images/' . $src)){
  		        // Return error
  		        return back()->with('error', 'Problem unlinking image!');
      			}
      		} else{
            // Return error
            return back()->with('error', 'Problem removing image from db!');
          }
      	}
      }
      // Return success
      return back()->with('success', 'Images have been removed!');
    }

    public function importXls(Request $request)
    {
      /*request()->validate([
       'xls'  => 'required|mimes:csv|max:2048',
     ]);*/
      $file = $request->xls;
      $row = 1;
      $array = [];
      if (($handle = fopen($file, "r")) !== FALSE) {
       while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
         $num = count($data);
         $row++;
         $array = [];
         for ($c=0; $c < $num; $c++) {
            $array[] =  $data[$c];
         }
          $vehicleCache[] =  $array;
       }
       fclose($handle);
      }

      // Remove header array
      $headers = array_shift($vehicleCache);

      forEach($vehicleCache as $row){
        if($row[28] == 'Y'){
          Inventory::firstOrCreate(['stock_num' => $row[17]],
            [
              'stock_num' => $row[17],
              //'vin' => $row[1],
              'year' => $row[8],
              'make' => $row[16],
              'model' => $row[14],
              'trim' => $row[11],
              'kms' => $row[19],
              'title' => $row[33],
              'color' => $row[18],
              'trans' => $row[12],
              'ad_num' => $row[35],
              'price' => $row[20],
            ]
          );
        }

      }
     //$sheet = Excel::toArray(new InventoryImport, request()->file('xls'));
     /*forEach($sheet[0] as $row){
      if($row[0] == 'Stock #') continue;
      if($row[0] == 'Summary:') continue;
      if($row[0] == 'Used:') continue;
      if($row[0] == 'New:') continue;
      if($row[0] == 'Used Missing Photo:') continue;
      if($row[0] == 'New Missing Photo:') continue;
      if($row[0] == 'Used Missing Photo and Trim:') continue;
      if($row[0] == 'New Missing Photo and Trim:') continue;
      if($row[0] == '|') continue;
      if($row[0] == '') continue;
      */

      return redirect('/home')->with('success', 'Spread sheet has been imported!');
    }


}
