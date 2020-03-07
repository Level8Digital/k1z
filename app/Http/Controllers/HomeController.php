<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Imports\InventoryImport;
use App\Inventory;
use App\Image;
use Maatwebsite\Excel\Facades\Excel;

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
      $inventory = DB::table('inventory')->paginate(10);

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
      $vehicle = Inventory::where('id', $id)->first();

      return view('editVehicle', ['vehicle' => $vehicle]);
    }

    public function updateVehicle(Request $request)
    {
      // Find vehicle
  		$vehicle = Inventory::findOrFail(request()->id);
      // Fill vehicle
  		$vehicle->fill(request()->all());
  		// Save vehcile
  		if(! $vehicle->save()){
  			// Return error is save didnt work
        return back()->with('error', 'Could not save vehicle!')->withInput();
  		}

      // if validation success
      if($images = request()->file('images')) {

        forEach($images as $img){

          $name = uniqid() . '.' . $img->getClientOriginalExtension();
          $targetPath = storage_path('app/public/images/');

          if($img->move($targetPath, $name)) {
              // save file name in the database
              Image::create(['inventory_id' => $vehicle->id, 'src' => $targetPath . $name]);
          }
        }// foreach
      }// if images

      $vehicle->refresh();

      return redirect('/edit-vehicle/'.$vehicle->id)->with('success', 'Vehicle has been updated!')->with('vehicle', $vehicle);
    }

    public function importXls(Request $request)
    {
      /*request()->validate([
       'xls'  => 'required|mimes:csv,xls|max:2048',
     ]);*/

     $sheet = Excel::toArray(new InventoryImport, request()->file('xls'));

     forEach($sheet[0] as $row){
      if($row[0] == 'Stock #') continue;

      Inventory::firstOrCreate(['vin' => $row[1]],
        [
          'stock_num' => $row[0],
          'vin' => $row[1],
          'year' => $row[2],
          'make' => $row[3],
          'model' => $row[4],
          'trim' => $row[5],
          'kms' => $row[6],
          'title' => $row[7],
          'color' => $row[8],
          'trans' => $row[9],
          'dis' => $row[10],
          'dok' => $row[11],
          'page' => $row[12],
          'ad_num' => $row[13],
          'price' => $row[14],
        ]
      );

      }

      return redirect('/home')->with('success', 'Spread sheet has been imported!');
    }


}
