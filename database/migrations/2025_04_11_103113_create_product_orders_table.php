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
        Schema::create('product_orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('product_id');
            $table->string('user_id');
            $table->string('ordered_product_name');
            $table->string('ordered_product_discounted_price');
            $table->string('ordered_product_undiscounted_price');
            $table->string('ordered_product_category');
            $table->string('ordered_product_slot');
            $table->string('ordered_product_general_varient_name');
            $table->string('ordered_product_color_varient_name');
            $table->string('ordered_product_color_varient_code');
            $table->timestamp('serial_data')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_orders');
    }
};
