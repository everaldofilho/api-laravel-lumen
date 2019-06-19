<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required'
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('senha'), $user->senha)) {
            $apikey = base64_encode(str_random(40));
            User::where('login', $request->input('login'))->update(['token' => "$apikey"]);;
            return response()->json(['status' => 'success', 'token' => $apikey]);
        } else {
            return response()->json(['status' => 'fail'],401);
        }
    }
}