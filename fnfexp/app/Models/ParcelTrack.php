<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelTrack extends Model
{
    use HasFactory;
    public $connection = "mysql2";
    protected $fillable = ['id', 'parcel_id', 'status', 'date_created'];
}
