<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_orders extends Model
{
    use HasFactory;

    protected $table = 'product_orders';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        "order_id",
        "product_id",
        "user_id",
        "ordered_product_name",
        "ordered_product_discounted_price",
        "ordered_product_undiscounted_price",
        "ordered_product_category",
        "ordered_product_slot",
        "ordered_product_general_varient_name",
        "ordered_product_color_varient_name",
        "ordered_product_color_varient_code",
        "serial_data",
    ];
}
