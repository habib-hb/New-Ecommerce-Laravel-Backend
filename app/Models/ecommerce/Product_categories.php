<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_categories extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $primaryKey = 'category_id';

    protected $fillable = [
        "category_id",
        "category_name",
        "serial_data",
    ];
}
