<?php

namespace App\Models;

use App\Models\Games;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Defis extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function game()
    {
        return $this->belongsTo(Games::class);
    }
}
