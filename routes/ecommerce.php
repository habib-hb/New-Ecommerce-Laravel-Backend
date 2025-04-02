<?php

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
use Illuminate\Support\Facades\Hash;


Route::get('/ecommerce-test', function () {
   return json_encode(['status' => 'New route registered']);
});


Route::get('/csrf-token' , function () {
    return csrf_token();
});

Route::post('user-register', [RegisteredUsersController::class, 'user_register']);

Route::post('user-login', [RegisteredUsersController::class, 'user_login']);

Route::get('read-cookie', [RegisteredUsersController::class, 'read_cookie']);
