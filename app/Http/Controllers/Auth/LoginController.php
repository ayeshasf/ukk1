<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\session;
use App\Models\User;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan untuk membuat view ini
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

    $admin = User::where('username', $credentials['username'])->first();

    if ($admin && Hash::check($credentials['password'], $admin->password)) {
        Session::put('admin', $admin->id);
        return redirect()->route('dashboard');
    }

    return back()->withErrors(['login_error' => 'Username atau Password salah.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('welcome');
    }
}
