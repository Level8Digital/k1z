<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

use App\Inventory;
use App\Http\Requests\ContactForm;
use App\Mail\SendContact;
use App\Http\Requests\FinancingForm;
use App\Mail\SendFinancing;

class PagesController extends Controller
{
    public function welcome()
    {
      $inventory = Inventory::with(['images'])->orderBy('desc')->limit(12)->get();

      return view('welcome', ['recentInventory' => $inventory]);
    }

    /*
     * SEND CONTACT FORM
    */
    public function inventory()
    {
      $inventory = DB::table('inventory')->paginate(10);

      $uniqueMakes = DB::table('inventory')
                       ->select('make', DB::raw('count(*) as total'))
                       ->groupBy('make')
                       ->get();

      return view('inventory', ['inventory' => $inventory, 'makes' => $uniqueMakes]);
    }

    public function filterInventory(Request $request)
    {
      print_r(request()->all());

      $fields = request()->all();

      $whereFields = [];
      // Default value for whereBetweenFields
      $whereBetweenFields = false;
      // HANDLE YEAR FILTER
      if($fields['minyear'] != 'any' && $fields['maxyear'] == 'any'){
        // Year is greater than the minyear
        $year = $fields['minyear'];
        // Push to $whereFields
        array_push($whereFields, ['filter' => true, 'field' => 'year', 'value' => $year, 'conditional' => '>']);
      } elseif($fields['maxyear'] != 'any' && $fields['minyear'] == 'any'){
        // Year is less than the maxyear
        $year = $fields['maxyear'];
        // Push to $whereFields
        array_push($whereFields, ['filter' => true, 'field' => 'year', 'value' => $year, 'conditional' => '<']);
      } elseif($fields['minyear'] != 'any' && $fields['maxyear'] != 'any'){
        // Both fields are set - filter in between the years
        // Possible where between fields for the filter
  			$whereBetweenFields = [
  				'first' => ['field' => 'year', 'value' => $fields['minyear']],
  				'second' => ['field' => 'year', 'value' => $fields['maxyear']]
  			];
      }

      // HANDLE MAKE FILTER


      print_r( $this->genericFilter(
  			Inventory::with([
  				'images'
  			])->orderBy('created_at', 'desc'),
  			$whereFields,
  			$whereBetweenFields
  		));

    }

    /*
     * VIEW VEHICLE INFO
    */
    public function vehicleInfo($id)
    {
      // Set up 'antibot' style 'captcha' for contact form
	    $numberConversion = array(
	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
	    );
	    // Produce random numbers
	    $numberOne = rand( 0, 6 );
	    $numberTwo = rand( 0, 6 );
	    // Add to the session for usage later
	    session(['a12Ty9UkJ1' => 'What is ' . $numberConversion[$numberOne] .
	    					' added to ' . $numberConversion[$numberTwo] . '? *', 'QbX4176lUU' => $numberOne + $numberTwo]);

      $vehicle = Inventory::where('id', $id)->first();

      return view('vehicle', ['vehicle' => $vehicle]);
    }

    /*
     * SHOW FINANCING VIEW W/ ANTIBOT
    */
    public function financing()
    {
      // Set up 'antibot' style 'captcha' for contact form
	    $numberConversion = array(
	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
	    );
	    // Produce random numbers
	    $numberOne = rand( 0, 6 );
	    $numberTwo = rand( 0, 6 );
	    // Add to the session for usage later
	    session(['a12Ty9UkJ1' => 'What is ' . $numberConversion[$numberOne] .
	    					' added to ' . $numberConversion[$numberTwo] . '? *', 'QbX4176lUU' => $numberOne + $numberTwo]);

      return view('financing');
    }
    public function faqs()
    {
      return view('faqs');
    }

    /*
     * SEND CONTACT FORM
    */
    public function contact()
    {
      // Set up 'antibot' style 'captcha' for contact form
	    $numberConversion = array(
	       0 => 'zero', 1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five',
	       6 => 'six', 7 => 'seven', 8 =>'eight', 9 => 'nine', 10 => 'ten'
	    );
	    // Produce random numbers
	    $numberOne = rand( 0, 6 );
	    $numberTwo = rand( 0, 6 );
	    // Add to the session for usage later
	    session(['a12Ty9UkJ1' => 'What is ' . $numberConversion[$numberOne] .
	    					' added to ' . $numberConversion[$numberTwo] . '? *', 'QbX4176lUU' => $numberOne + $numberTwo]);

      return view('contact');
    }

    // SEND CONTACT FORM
    public function sendContact(ContactForm $request)
    {
      if(session('QbX4176lUU') != $request->captcha){
  			// Return error is save didnt work
        return back()->with('error', 'You have answered the math question incorrectly. Try again.')->withInput();
      }

      if($request->vehicle != '') $vehicle = $request->vehicle;
      if($request->vehicle == '') $vehicle = 'General Enquiry';

      $properties = [
				'email' => $request->email,
				'name' => $request->firstname . ' ' . $request->lastname,
				'phone' => $request->phone,
				'message' => $request->message,
        'vehicle' => $vehicle
      ];
      $toAddress = config('mail.sendto');

  		Mail::to($toAddress)->send(new SendContact($properties));


      return back()->with('success', 'Message has been sent! We will be in touch with you shortly.');
    }

    /*
     * SEND FINANCING FORM
    */
    public function sendFinancing(FinancingForm $request)
    {
      if(session('QbX4176lUU') != $request->captcha){
  			// Return error is save didnt work
        return back()->with('error', 'You have answered the math question incorrectly. Try again.')->withInput();
      }

      $properties = [
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'city' => $request->city,
        'postalcode' => $request->postalcode,
        'resduration' => $request->resduration,
        'birthday' => $request->birthday,
        'sin' => $request->sin,
        'employer' => $request->employer,
        'occupation' => $request->occupation,
        'income' => $request->income,
        'employerphone' => $request->employerphone,
        'employeraddress' => $request->employeraddress,
        'empduration' => $request->empduration
      ];
      $toAddress = config('mail.sendto');
;
  		Mail::to($toAddress)->send(new sendFinancing($properties));


      return redirect('/financing')->with('success', 'Your financing application has been sent! We will be in touch with you shortly.');
    }
    public function applyForFinancing()
    {

    }
}
