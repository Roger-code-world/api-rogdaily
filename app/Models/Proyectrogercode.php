<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectrogercode extends Model
{
    use HasFactory;
    
    protected $table = 'proyects';

    protected $fillable = [
        'name',
    ];
}
