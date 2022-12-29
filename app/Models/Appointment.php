<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = "appointments";

    protected $fillable = [
        "description",
        "date",
        "type",
        "doctor_id"
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
