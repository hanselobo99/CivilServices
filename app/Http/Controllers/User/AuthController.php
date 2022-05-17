<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginDetails()
    {
        if (Auth::guard('user')->check()) {
            return to_route('/');
        }
        return view('User.login.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return to_route('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }

    public function RegisterPage()
    {
        if (Auth::guard('user')->check()) {
            return to_route('/');
        }
        return view('User.login.Register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
//        return $request->only('email', 'password');
        Auth::guard('user')->attempt($request->only('email', 'password'));

        return to_route('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        return redirect('/');
    }
}


