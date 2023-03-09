<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;
 protected $table = 'technicians';
    protected $fillable = [
         'qualification',
            'years_of_experience',
            'bio',
          'user_id',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
   

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
