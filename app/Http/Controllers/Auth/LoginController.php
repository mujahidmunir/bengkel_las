<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    private function generateRandomString($length = 80)
    {
        $karakkter = '012345678dssd9abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $panjang_karakter = strlen($karakkter);
        $str = '';
        for ($i = 0; $i < $length; $i++) {
            $str .= $karakkter[rand(0, $panjang_karakter - 1)];
        }
        return $str;
    }


    function postLogin(Request $request)
    {
        $email = $request->email;
        $pass  = $request->password;

        $remember_me = ( !empty($request->remember_me ) ) ? TRUE : FALSE;

        try {
            if (Auth::attempt(['email' => $email, 'password' => $pass])) {
                $newToken = $this->generateRandomString();
                if ($request->user()->hasRole('cms')) {
                    $user                   = User::cekEmail($email);
                    $user->remember_token   = $newToken;
                    $user->save();

                    Auth::login($user, $remember_me);

                    return response()->json(['message' => 1], 201);
                }
            } else {
                return response()->json(['message' => 2], 203);
            }

        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }


    function logout(Request $request)
    {
        if ($request->user()->hasRole('cms')) {

            Auth::logout();
            return redirect('cms/authentication/login');

        } else {
            abort(403);
        }
    }
}
