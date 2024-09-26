<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
'courier_info_id', 'const_no', 'update_date', 'current_city', 'current_location', 'arrival_time', 'status', 'lat', 'long', 'comment'
    ];
}

