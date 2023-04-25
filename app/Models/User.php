<?php

namespace App\Models;
use App\Models\City;
use App\Models\Technician;
use App\Models\Role;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Notification;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'is_active',
        'last_login',
        'join_date',
        'image',
        'password',
        'phone_number',
        'city_id', 
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $table = 'users';

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

     public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }


}
