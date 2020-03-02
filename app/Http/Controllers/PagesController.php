<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inventory()
    {
      return view('inventory');
    }
    public function financing()
    {
      return view('financing');
    }
    public function faqs()
    {
      return view('faqs');
    }
    public function contact()
    {
      return view('contact');
    }
    public function applyForFinancing()
    {

    }
}
