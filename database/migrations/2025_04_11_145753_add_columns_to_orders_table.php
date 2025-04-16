<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_orders', function (Blueprint $table) {
            $table->string('user_name')->after('user_id');
            $table->string('user_location')->after('user_name');
            $table->string('ordered_product_coupon_text')->after('ordered_product_undiscounted_price');
            $table->string('ordered_product_coupon_discount_rate')->after('ordered_product_coupon_text');
            $table->string('ordered_product_coupon_deducted_price')->after('ordered_product_coupon_discount_rate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_orders', function (Blueprint $table) {
            //
        });
    }
};
