<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ecommerce_products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('category_id');
            $table->string('slot_id');
            $table->string('product_name');
            $table->string('product_default_undiscounted_price');
            $table->string('product_default_discounted_price');
            $table->string('products_in_inventory');
            $table->string('product_varient');
            $table->timestamp('serial_data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecommerce_products');
    }
};
