<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $timestamps = false;
    protected $table="tblbooking";
    protected $fillable = [
        'userEmail',
        'VehicleId',
        'message',
        'Status',
        'TupePyment'
    ];
    use HasFactory;
}
