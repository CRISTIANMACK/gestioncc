<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CicloModel extends Model
{
    use HasFactory;
    protected $table = 'ciclos';

    public $timestamps = false;
    
    protected $fillable = [
        'ciclo'
    ];
}
