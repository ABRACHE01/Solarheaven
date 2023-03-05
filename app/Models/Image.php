<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image' , 'user_id' , 'service_id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function service()
    // {
    //     return $this->belongsTo(Service::class);
    // }

    public function imageable()
{
    return $this->morphTo();
}
}
