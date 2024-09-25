<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $admin = User::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            Session::put('admin', $admin->id);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login_error' => 'Username atau Password salah.']);
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }

        $toys = Toy::all(); // Ambil semua mainan
        return view('admin.dashboard', compact('toys')); // Kirim variabel $toys ke tampilan dashboard
    }


}
