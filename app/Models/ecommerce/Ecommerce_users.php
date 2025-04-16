<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ecommerce_users extends Model
{
    use HasFactory;

    protected $table = 'ecommerce_users';

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
