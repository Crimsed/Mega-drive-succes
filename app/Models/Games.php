<?php

namespace App\Models;

use App\Models\Defis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Games extends Model
{
    use HasFactory;

    public function defis()
    {
        return $this->hasMany(Defis::class);
    }
    
}