<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $table = "services";
    protected $fillable = [
        'sub_menu_id', 'title', 'contents', 'metas', 'links', 'slug', 'menu_id', 'status'
    ];
}
