<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vihical extends Model
{
    protected $table="vihical";
    protected $fillable =['name','model_year','price','	speed','state','litter','horse_power','img1','img2','img3','img4','img5']; //الحاجات اللي تشتي تعنل لها قيمه
    protected $hedden=[];
    use HasFactory;
}
