<?php

namespace App\Models;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
 protected $table = 'cities';
    protected $fillable = [
        'name',
    ];
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

   

    public function users()
    {
        return $this->hasMany(User::class);
    }
    
}
