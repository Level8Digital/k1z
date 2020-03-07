<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\InventoryImport;
use App\Inventory;
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
      return view('home');
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
