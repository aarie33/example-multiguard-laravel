<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/employee';

    public function showLoginForm()
    {
        return view('employee.login', [
            'title' => 'Employee Login',
        ]);
    }

    protected function guard()
    {
        return auth()->guard('employee');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('employee.login');
    }
}
