<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunderProject extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'total_fund',
        'benefit',
        'fixfund',
        'permanent_fund',
        'temporary_fund',
        'count_temporary_fund',
        'notes',
    ];
    public function project() {
        return $this->belongsToMany(Project::class); 
    }
}
