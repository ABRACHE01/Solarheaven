<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentHistory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'appointment_id',
        'reschedule_time',
        'status',
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }
}
