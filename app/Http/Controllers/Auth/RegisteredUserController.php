<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'], //元からある
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],  //元からある
            'birthday' => ['required', 'date'],
            // 'original_id' => ['required', 'string', 'max:8'],
            'personality_id' => ['required', 'int'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],  //元からある
        ]);

        $user = User::create([
            'name' => $request->name,  //元からある
            'email' => $request->email,   //元からある
            'birthday' => $request->birthday,
            'password' => $request->password,  //元からある
            'password' => Hash::make($request->password),   //元からある
             // 'original_id' => $request->original_id,
             'personality_id' => $request->personality_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function index()
    {
        // users テーブルの全データを取得して JSON 形式で返す
        $users = User::all();
        return response()->json($users);
    }

}
