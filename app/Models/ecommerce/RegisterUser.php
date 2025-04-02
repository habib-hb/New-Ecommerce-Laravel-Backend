<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegisterUser extends Model
{
    use HasFactory;

    protected $table = 'register_users';

    protected $primaryKey = 'user_id';

    protected $fillable = [
       'name',
       'email',
       'password',
       'phone',
       'authorization_key',
       'serial_data',
    ];
}
