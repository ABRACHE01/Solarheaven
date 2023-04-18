<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Technician;
use App\Models\Service;
use App\Models\Admin;
use App\Models\City;
use App\Models\Review;
use App\Models\AppointmentHistory;
use App\Models\Payment;
use Illuminate\Database\Eloquent\SoftDeletes;


class Appointment extends Model
{
    use HasFactory , SoftDeletes ;

    protected $fillable = [
        'client_id', 'technician_id','localisation', 'city_id' ,
        'start_time', 'end_time', 'status', 'admin_id', 'service_id','address'
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
