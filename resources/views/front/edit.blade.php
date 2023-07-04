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
<body>
    <!-- 編集画面へもどる -->
    <div id="backbtn" class="mt-5 btn btn-primary ml-4"></div>
    <!-- クリックした文章のみを表示させる -->
    <p id="username" class="mt-10 text-center font-bold"></p>
    <p id="username" class="mt-5 text-center font-bold text-xl">編集しよう</p>
    <form id="editForm">
        @csrf

        <!-- 書き替えるユーザーのid -->
        <div id="userId">
            <!-- <x-text-input id="user_id" class="block mt-1 w-full" type="hidden" name="user_id" value="$user_id" /> -->
        </div>

        <!-- クリックした文章のid -->
        <div id="sentenceId">
            <!-- <x-text-input id="sentence_id" class="block mt-1 w-full" type="hidden" name="sentence_id" value="$sentence_id" /> -->
        </div>

        <!-- 書き込みしているユーザーのid -->
        <div>
            <x-text-input id="edit_user_id" class="block mt-1 w-full h-20" type="hidden" name="edit_user_id" value="{{ Auth::user()->id }}" />
        </div>
        
        <!-- 選択した文章 -->
        <div class="card bg-primary h-60 mt-10 mx-8 font-bold text-center">
            <div id="select"class="mt-10">
                <!-- <x-input-label for="content" :value="'{{$sentences->sentences}}'" /> -->
            </div>
    
            <!-- 更新内容 -->
            <div class="mt-4">
                <label class="font-bold text-center block font-medium text-sm text-gray-700" for="content" >あなたからみた印象を書いてね</label>
                <input id="content" class="block mt-8 w-4/5 h-20 mx-auto" type="text" name="content" :value="old('content')" required autocomplete="content" />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
        </div>
        
        <div class="flex items-center justify-end mt-4 btn btn-primary mx-40">
            {{-- <x-primary-button class="ml-4">
                {{ '更新' }}
            </x-primary-button> --}}
            <button type="submit" class="primary mx-auto bg-primary">更新</button>
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