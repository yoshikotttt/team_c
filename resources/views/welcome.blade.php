<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="pastel">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex items-center justify-center h-screen bg-yellow-50">
        <div class="m-auto inset-0">
            <div>
                <div class="card m-2 mx-6 bg-emerald-200 text-primary-content">
                    <div class="card-body">
                        <h2 class="text-center text-xl font-semibold text-indigo-900 ">性格診断アプリ<br>〇〇</h2>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('img/top.png') }}" class="w-full max-h-auto">
                </div>

                <div class="mt-6">
                    <div class="card m-2 mx-12 mb-6 bg-amber-200 text-primary-content">
                        <div class="card-body">
                            <a href="{{ route('explanation') }}">
                            
                            <h2 class="text-center text-xl font-semibold text-indigo-900">このアプリの使い方</h2>

                            <p class="mt-1 text-center text-indigo-900 text-sm leading-relaxed">
                                初めて使う方はこちら
                            </p>
                            </a>
                        </div>
                    </div>
                    <div class="card m-2 mx-12 mb-6 bg-amber-200 text-primary-content">
                        <div class="card-body">
                            <a href="https://www.16personalities.com/ja" target="_blank">
                            
                            <h2 class="text-center text-xl font-semibold text-indigo-900">16タイプ性格診断</h2>

                            <p class="mt-1 text-center text-indigo-900 text-sm leading-relaxed">
                                外部サイトへ移動します
                            </p>
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
            @if (Route::has('login'))
                <div class="mt-4 flex justify-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        
                    @else
                        <button onclick="location.href='login'" type="button" class="btn btn-active bg-rose-200 btn-sm mx-2 text-indigo-900">
                            ログイン
                        </button>
                      

                        @if (Route::has('register'))
                            <button onclick="location.href='register'" type="button" class="btn btn-active bg-blue-200 btn-sm mx-2 text-indigo-900">
                                新規登録
                            </button>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
