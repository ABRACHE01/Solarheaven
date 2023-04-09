<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'appointment_id',
        'amount',
        'extra_charges',
        'description',
        'method',
        'status',
        'paid_at',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
