<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Ecommerce_admins extends Model
{
    use HasFactory;

    protected $table = 'ecommerce_admins';

    protected $primaryKey = 'admin_id';

    protected $fillable = [
       'name',
       'admin_type',
       'email',
       'password',
       'phone',
       'authorization_key',
       'serial_data',
    ];
}
