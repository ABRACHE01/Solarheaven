<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
    ];
    
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
