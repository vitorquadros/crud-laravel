<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccines';

    protected $fillable = [
        'name',
        'expected_date',
        'application_date',
    ];
    
}
