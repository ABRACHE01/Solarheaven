<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'picture', 'phone_number', 'qualification', 'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
