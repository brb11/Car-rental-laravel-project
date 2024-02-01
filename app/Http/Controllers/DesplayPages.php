<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesplayPages extends Controller
{
    public function Vdetails($id)
    {
     return view('frontend/pages/vehical-details?vid='.$id);
    }



}
