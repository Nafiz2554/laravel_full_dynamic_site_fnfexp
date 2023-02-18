<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;
    protected $fillable=['id','who_we_are','fn_express','mission','vission','customers','experience','percel_delivery','image','status'];
}
