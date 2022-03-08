<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('auth.index', ['title' => 'Permata Backend']);
    }

    public function signin(AuthRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validated();
        if (!auth()->attempt($credentials))  return back()->with('message', 'The provided credentials do not match our records.');

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.index'));
    }

    public function signout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Thank you for using this web app :)');
    }
}
