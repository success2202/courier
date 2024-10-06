<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_id',
        'date',
        'time', 
        'location', 
        'status',
        'updated_by',
        'Remarks'
    ];
}
