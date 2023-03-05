<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 'technician_id','localisation', 'city_id', 'start_time', 'end_time', 'status', 'admin_id',
    ];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointment_services') ->withTimestamps();
    }
    
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function appointmentHistories()
    {
        return $this->hasMany(AppointmentHistory::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
