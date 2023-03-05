<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description','price', 'admin_id',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
