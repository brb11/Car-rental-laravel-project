<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vihical extends Model
{
    protected $table="vihical";
    protected $fillable =['name','price','photo','created_at','updated_at']; //الحاجات اللي تشتي تعنل لها قيمه
    protected $hedden=[];
    use HasFactory;
}
