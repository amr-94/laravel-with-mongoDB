<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Profile extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'profiles';
    protected $fillable = [
        'user_id',
        'bio',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', '_id');
    }
}
