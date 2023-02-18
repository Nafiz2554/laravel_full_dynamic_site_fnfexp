<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable=['id','title','subtitle','price','unit','input1','input2','input3','input4','mobile_no','status'];
}
