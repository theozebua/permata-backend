<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        return view('auth.index', ['title' => 'Permata Backend']);
    }

    public function signin(AuthRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validated();
        if (!auth()->attempt($credentials))  return back()->with('failed', 'The provided credentials do not match our records.');

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard.index'));
    }
}
