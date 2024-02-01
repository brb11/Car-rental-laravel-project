<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Vihical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Vihical_details extends Controller
{
    public function Vdetails($vid)
    {
        $details_data = DB::table('vihical')
            ->join('categories', 'vihical.cat_id', '=', 'categories.id')
            ->select('vihical.*', 'categories.name as bra_name', 'categories.id as bid')
            ->where('vihical.id', $vid)
            ->get();
            // Retrieve the first row as an object


        return view('frontend.pages.vehical-details', ['vid' => $vid,'details_data' => $details_data ]);
    }
    public function Index()
    {
        $data = DB::table('vihical')
        ->join('categories', 'vihical.cat_id', '=', 'categories.id')
        ->select('vihical.*', 'categories.name as bra_name', 'categories.id as bid')
        ->get();
    return view('index',['data' => $data]);
    }



}
