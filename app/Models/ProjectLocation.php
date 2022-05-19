<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'province_id',
        'city_id',
        'district_id',
        'location',
        'notes',
        
    ];
}
