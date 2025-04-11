<?php

use App\Http\Controllers\ecommerce\EcommerceAdminsController;
use App\Http\Controllers\ecommerce\EcommerceProductCategoriesController;
use App\Http\Controllers\ecommerce\EcommerceProductsController;
use App\Http\Controllers\ecommerce\EcommerceOrdersController;
use App\Http\Controllers\ecommerce\EcommerceProductSlotsController;
use App\Http\Controllers\ecommerce\RegisteredUsersController;
use App\Http\Controllers\email_unsubscribe_confirmed;
use App\Mail\TestEmail;
use App\Models\blog_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Middleware\AdminCheck;
use App\Models\ecommerce\ecommerce_admins;
use Illuminate\Support\Facades\Hash;


Route::get('/ecommerce-test', function () {
   return json_encode(['status' => 'New route registered']);
});


Route::get('/csrf-token' , function () {
    return csrf_token();
});

Route::post('user-register', [RegisteredUsersController::class, 'user_register']);

Route::post('user-login', [RegisteredUsersController::class, 'user_login']);

Route::get('read-user-cookie', [RegisteredUsersController::class, 'read_user_cookie']);

Route::post('search_user_by_name', [RegisteredUsersController::class, 'search_user_by_name']);

Route::post('search_user_by_email', [RegisteredUsersController::class, 'search_user_by_email']);

Route::post('search_user_by_phone', [RegisteredUsersController::class, 'search_user_by_phone']);

Route::get('show_all_users' , [RegisteredUsersController::class , 'show_all_users']);











Route::post('admin-register', [EcommerceAdminsController::class, 'admin_register']);

Route::post('admin-login', [EcommerceAdminsController::class, 'admin_login']);

Route::get('read-admin-cookie', [EcommerceAdminsController::class, 'read_admin_cookie']);












Route::post('product-register', [EcommerceProductsController::class, 'product_register']);

Route::get('show_all_products' , [EcommerceProductsController::class , 'show_all_products']);












Route::post('product-category-register', [EcommerceProductCategoriesController::class, 'product_category_register']);

Route::get('show_all_product_categories' , [EcommerceProductCategoriesController::class , 'show_all_product_categories']);










Route::post('product-slot-register', [EcommerceProductSlotsController::class, 'product_slot_register']);

Route::get('show_all_product_slots' , [EcommerceProductSlotsController::class , 'show_all_product_slots']);













Route::post('product-order-register', [EcommerceOrdersController::class, 'product_order_register']);

