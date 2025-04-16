<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Ecommerce_admins;
use Illuminate\Http\Request;

class EcommerceAdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function admin_register(Request $request)
    {
        $new_admin_data = [
            'name' => $request->input('name'),
            'admin_type' => $request->input('admin_type'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'authorization_key' => bin2hex(random_bytes(36)),
            'serial_data' => now(),
        ];
        Ecommerce_admins::create($new_admin_data);

        $cookie = cookie('ecommerce_admin_session', json_encode($new_admin_data), 60);

        return response()->json(['status' => 'successful Registration', 'data' => $new_admin_data])->cookie($cookie);
    }

    /**
     * Display the specified resource.
     */


     public function admin_login(Request $request)
     {
        $logged_admin_data = Ecommerce_admins::where('email', $request->input('email'))->where('password', $request->input('password'))->first();

        if ($logged_admin_data) {
             $cookie = cookie('ecommerce_admin_session', json_encode($logged_admin_data), 60);
             return response()->json(['status' => 'successful login', 'data' => $logged_admin_data])->cookie($cookie);
        }else{
             return response()->json(['status' => 'error', 'data' => 'Invalid email or password']);
        }
     }


     public function read_admin_cookie(Request $request){
         $cookie = $request->cookie('ecommerce_admin_session');
         $decoded_cookie = json_decode($cookie);
         return response()->json(['status' => 'success', 'data' => $decoded_cookie , 'authorization_key' => $decoded_cookie->authorization_key]);
     }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
