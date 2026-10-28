<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{

    public function showRegisterForm(): View
    {
        return view('registration'); //отображение формы регистрации
    }

    public function registerUser(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'login' => 'required|min:6|max:255|unique:users|regex:/^[a-z0-9]+$/i',
            'email' => 'required|min:3|max:255|unique:users|email',
            'password' => 'required|min:8|max:255|confirmed',
            'phone' => 'required|size:11|unique:users',
            'full_name' => 'required|min:2|max:255|regex:/^[а-я\s]+$/iu',
        ]);

        // код для регистрации
        // документация раздел Eloquent:Getting Started подраздел Inserting and Updating Models

    }

    public function showLoginForm(): View
    {
        return view('login'); //отображение формы входа
    }

    public function authenticate(Request $request): RedirectResponse
    {
        // код для выхода из аккаунта
        // документация раздел Eloquent:Authenticate подраздел Manually Authentication Users
    }

    public function logout(Request $request): RedirectResponse
    {
        // код для выхода из аккаунта
        // документация раздел Eloquent:Authenticate подраздел Loggin out
    }
}
