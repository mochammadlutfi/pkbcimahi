<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'email_verified_at'
    ];
}
