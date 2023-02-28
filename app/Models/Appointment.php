<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

   

    // protected $fillable = ['client_id', 'technician_id', 'start_time', 'end_time', 'cost', 'status'];

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
    
 
}
