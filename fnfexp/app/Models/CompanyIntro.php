<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyIntro extends Model
{
    use HasFactory;
    protected $fillable=['id','title','subtitle1','subtitle2','year','total_delivery','employee','experience','image','status'];
}
