<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use App\Models\Vihical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

        public function index()
        {
            $users = User::all();
            return view('include.footer', compact('users'));
        }
            // Retrieve the first row as an object






}
