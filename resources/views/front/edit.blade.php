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
    <!-- クリックした文章のみを表示させる -->
    <p>関数</p>
    <form id="editForm">
        @csrf

        <!-- 書き替えるユーザーのid -->
        <div>
            <x-text-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value="$user_id" />
        </div>

        <!-- クリックした文章のid -->
        <div>
            <x-text-input id="sentence_id" class="block mt-1 w-full" type="hidden" name="sentence_id" value="$sentence_id" />
        </div>

        <!-- 書き込みしているユーザーのid -->
        <div>
            <x-text-input id="edit_user_id" class="block mt-1 w-full" type="hidden" name="edit_user_id" value="$edit_user_id" />
        </div>
        
        <!-- 更新内容 -->
        <div class="mt-4">
            <x-input-label for="content" :value="'変更内容を記入してください。'" />
            <x-text-input id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            {{-- <x-primary-button class="ml-4">
                {{ '更新' }}
            </x-primary-button> --}}
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </form>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    @vite('resources/js/app.js')

    <!-- Custom JS -->
    @vite('resources/js/edit.js')

</body>
</html>