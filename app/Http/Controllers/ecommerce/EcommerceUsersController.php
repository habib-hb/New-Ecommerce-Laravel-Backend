<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Ecommerce_users;
use Illuminate\Http\Request;

class EcommerceUsersController extends Controller
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
        Ecommerce_users::create($new_user_data);

        $cookie = cookie('ecommerce_user_session', json_encode($new_user_data), 60);

        return response()->json(['status' => 'success', 'data' => $new_user_data])->cookie($cookie);
    }



    public function user_login(Request $request)
    {
       $logged_user_data = Ecommerce_users::where('email', $request->input('email'))->where('password', $request->input('password'))->first();

       if ($logged_user_data) {
            $cookie = cookie('ecommerce_user_session', json_encode($logged_user_data), 60);
            return response()->json(['status' => 'success', 'data' => $logged_user_data])->cookie($cookie);
       }else{
            return response()->json(['status' => 'error', 'data' => 'Invalid email or password']);
       }
    }


    public function read_user_cookie(Request $request){
        $cookie = $request->cookie('ecommerce_user_session');
        $decoded_cookie = json_decode($cookie);
        return response()->json(['status' => 'success', 'data' => $decoded_cookie , 'authorization_key' => $decoded_cookie->authorization_key]);
    }



    public function search_user_by_name(Request $request){
        $searched_user_data_by_name = Ecommerce_users::where('name', 'like', '%'.$request->input('name').'%')->get();

        return response()->json(['status' => 'successfully searched data by name', 'data' => $searched_user_data_by_name]);
    }






    public function search_user_by_email(Request $request){
        $searched_user_data_by_email = Ecommerce_users::where('email', 'like', '%'.$request->input('email').'%')->get();

        return response()->json(['status' => 'successfully searched data by email', 'data' => $searched_user_data_by_email]);
    }








    public function search_user_by_phone(Request $request){
        $searched_user_data_by_phone = Ecommerce_users::where('phone', 'like', '%'.$request->input('phone').'%')->get();

        return response()->json(['status' => 'successfully searched data by phone', 'data' => $searched_user_data_by_phone]);
    }










    public function show_all_users(){
        $all_users = Ecommerce_users::all();

        return response()->json(['status' => 'successfully fetched all users', 'data' => $all_users]);
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
