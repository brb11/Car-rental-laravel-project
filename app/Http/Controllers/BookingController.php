<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Categories;
use App\Models\Vihical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    protected function create(Request $request)
    {

        $data = [
            'message' => $request->input('message'),
            'TupePyment' => $request->input('TypePayment'),
            'userEmail' => auth()->user()->email,
            'VehicleId' => $request->input('vid'),
            'Status' =>0,
            // قم بتحديد المزيد من الحقول الأخرى إذا لزم الأمر
        ];
        Booking::create($data);

        return redirect()->back()->with('success_message', 'Booking successfull');
}

}
