<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booked_patient_details extends Model
{
    use HasFactory;

    protected $table = 'booked_patient_details';

    protected $primaryKey = 'booked_patient_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'authorization_key',
        'serial_data',
    ];
}
