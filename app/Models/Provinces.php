<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;

    public function cities()
    {
      return $this->hasMany(Cities::class);
    }

    public function districts()
    {
      return $this->hasMany(Districts::class);
    }
}
