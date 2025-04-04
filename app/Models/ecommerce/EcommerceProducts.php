<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EcommerceProducts extends Model
{
    use HasFactory;

    protected $table = 'ecommerce_products';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        "category_id",
        "slot_id",
        "product_name",
        "product_undiscounted_price",
        "product_discounted_price",
        "products_in_inventory",
        "product_varient",
        "serial_data",
    ];
}
