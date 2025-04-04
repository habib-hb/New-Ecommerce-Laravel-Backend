<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_slots extends Model
{
    use HasFactory;

    protected $table = 'product_slots';

    protected $primaryKey = 'slot_id';

    protected $fillable = [
        "slot_id",
        "slot_name",
        "serial_data",
    ];
}
