<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DayModel extends Model
{
    use HasFactory;
    
    protected $table = 'dias';

    public $timestamps = false;
    
    protected $fillable = [
        'dia'
    ];

}
