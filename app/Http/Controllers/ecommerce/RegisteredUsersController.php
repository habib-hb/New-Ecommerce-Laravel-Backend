<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\RegisterUser;
use Illuminate\Http\Request;

class RegisteredUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function user_register(Request $request)
    {
        // return json_encode(['name' => $request->input('name'), 'email' => $request->input('email')]);
        $new_user_data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'phone' => $request->input('phone'),
            'authorization_key' => bin2hex(random_bytes(36)),
            'serial_data' => now(),
        ];
        RegisterUser::create($new_user_data);

        $cookie = cookie('ecommerce_user_session', json_encode($new_user_data), 60);

        return response()->json(['status' => 'success', 'data' => $new_user_data])->cookie($cookie);
    }



    public function user_login(Request $request)
    {
       $logged_user_data = RegisterUser::where('email', $request->input('email'))->where('password', $request->input('password'))->first();

       if ($logged_user_data) {
            $cookie = cookie('ecommerce_user_session', json_encode($logged_user_data), 60);
            return response()->json(['status' => 'success', 'data' => $logged_user_data])->cookie($cookie);
       }else{
            return response()->json(['status' => 'error', 'data' => 'Invalid email or password']);
       }
    }


    public function read_cookie(Request $request){
        $cookie = $request->cookie('ecommerce_user_session');
        $decoded_cookie = json_decode($cookie);
        return response()->json(['status' => 'success', 'data' => $decoded_cookie , 'authorization_key' => $decoded_cookie->authorization_key]);
    }

    /**
     * Display the specified resource.
     */
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
