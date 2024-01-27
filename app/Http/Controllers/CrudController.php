<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Vihical;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function show()
    {
        $data= Vihical::all();
        //$users=Users::all();
        return view('index',compact('data')); //fech
    }
    public function showUsers()
    {
        $users= Users::all();
        return view('include/footer',compact('users')); //fech
    }


}
