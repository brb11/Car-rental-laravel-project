<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesplayPages extends Controller
{
    public function About()
    {
     return view('frontend/pages/pages-about');
    }
    public function Contact()
    {
     return view('frontend/pages/pages-contact');
    }



}
