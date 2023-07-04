<!DOCTYPE html>
<html lang="en" data-theme="pastel">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="m-auto w-full max-w-xs">
        <div class="m-2 mx-6">
            <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white">LOGIN</h2>
        </div>
        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4">{{ session('status') }}</div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-6">
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" class="input input-bordered input-primary w-full max-w-xs" type="email" name="email" required autofocus autocomplete="email" />
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <!-- Password -->
            <div class="mt-6">
                <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                <div class="w-full max-w-xs">
                    <input id="password" class="input input-bordered input-primary w-full max-w-xs" type="password" name="password" required autocomplete="current-password" />
                </div>
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="block mt-4 flex justify-center">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="checkbox checkbox-primary" />
                    <span class="ml-2">パスワードを記録する</span>
                </label>
            </div>
            <div class="mt-4 flex justify-center">
                <button type="submit" class="btn btn-active btn-success btn-sm mx-2">ログインする</button>
            </div>

            <!-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
            </div> -->
        </form>
        <div class="block mt-4 flex justify-center">
            <div class="w-full max-w-xs">
                <img src="{{ asset('img/top.png') }}" class="w-full max-h-auto">
            </div>
        </div>
    </div>
</body>
</html>
