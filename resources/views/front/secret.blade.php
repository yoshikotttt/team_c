<!DOCTYPE html>
<html lang="en" data-theme="pastel">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="text-indigo-900 bg-primary h-screen">
    <!-- 詳細画面へもどる -->
    <div id="backbtn" class="btn btn-secondary m-5 bg-secondary text-xl text-indigo-900"></div>
    <!-- クリックしたユーザーの情報を取ってくる -->
    <p class="text-center font-bold text-xl mt-4">問題！</p>
    <form id="userForm">
        @csrf


        <!-- 質問 -->
        <div class="mt-4">
            <p id="question" class="mt-40 text-center text-xl"></p>
            <x-text-input id="content" class="block mt-20 h-8 w-full bg-white mb-10" type="date" name="birthday" :value="old('birhday')" required autocomplete="birhday" />
            <x-input-error :messages="$errors->get('birhday')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4 text-center">
            <button class="m-auto btn secondary bg-secondary text-xl text-indigo-900">
                {{ '回答' }}
            </button>
        </div>
    </form>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    @vite('resources/js/app.js')

    <!-- Custom JS -->
    @vite('resources/js/secret.js')

</body>
</html>