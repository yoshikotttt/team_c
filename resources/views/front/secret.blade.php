<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- クリックしたユーザーの情報を取ってくる -->
    <p>問題！</p>
    <form id="userForm">
        @csrf


        <!-- 質問 -->
        <div class="mt-4">
            <p id="question"></p>
            <x-text-input id="content" class="block mt-1 w-full" type="date" name="birthday" :value="old('birhday')" required autocomplete="birhday" />
            <x-input-error :messages="$errors->get('birhday')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ '回答' }}
            </x-primary-button>
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