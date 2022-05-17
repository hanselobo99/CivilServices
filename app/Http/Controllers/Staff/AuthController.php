<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginDetails()
    {
        if (Auth::guard('staff')->check()) {
            return to_route('/');
        }
        return view('Staff.login.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if (Auth::guard('staff')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
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
        return view('Staff.login.Register');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        Staff::create($data);
//        return $request->only('email', 'password');
        Auth::guard('staff')->attempt($request->only('email', 'password'));

        return to_route('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('staff')->logout();

        return redirect('/');
    }
}
