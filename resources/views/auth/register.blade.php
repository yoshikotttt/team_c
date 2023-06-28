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
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <!-- forでキーを設定。valueはラベルとして表示される-->
            <x-input-label for="name" :value="'ユーザー名（ニックネーム）'" />
            <!-- 実際にユーザーが入力した文字。idでキーを照合。old（name）は前回の入力履歴を表示させるため-->
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <!-- 入力忘れ時等のエラー -->
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="'Email'" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- birthday -->
        <div>
            <!-- forでキーを設定。valueはラベルとして表示される-->
            <x-input-label for="birthday" :value="'誕生日'" />
            <!-- 実際にユーザーが入力した文字。idでキーを照合。old（birthday）は前回の入力履歴を表示させるため-->
            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autofocus autocomplete="birthday" />
            <!-- 入力忘れ時等のエラー -->
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>
        
        <!-- personality_id -->
        <div>
            <!-- forでキーを設定。valueはラベルとして表示される-->
            <x-input-label for="personality_id" :value="'性格タイプを選択してください。'" />
            <!-- 実際にユーザーが入力した文字。idでキーを照合。old（birthday）は前回の入力履歴を表示させるため-->
            <select id="personality_id" class="block mt-1 w-full" name="personality_id" required autofocus autocomplete="personality_id">
                <option value="">選択してください</option>
                <option value="1">INTJ 建築家_分析家</option>
                <option value="2">INTP 論理学者_分析家</option>
                <option value="3">ENTJ 指揮官_分析家</option>
                <option value="4">ENTP 討論者_分析家</option>
                <option value="5">INFJ 提唱者_外交官</option>
                <option value="6">INFP 仲介者_外交官</option>
                <option value="7">ENFJ 主人公_外交官</option>
                <option value="8">ENFP 運動家_外交官</option>
                <option value="9">ISTJ 管理者_番人</option>
                <option value="10">ISFJ 擁護者_番人</option>
                <option value="11">ESTJ 幹部_番人</option>
                <option value="12">ESFJ 領事_番人</option>
                <option value="13">ISTP 巨匠_探検家</option>
                <option value="14">ISFP 冒険家_探検家</option>
                <option value="15">ESTP 起業家_探検家</option>
                <option value="16">ESFP エンターテイナー_探検家</option>
            </select>
            <x-input-error :messages="$errors->get('personality_id')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="'Password'" />
            
            <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password" />
            
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="'Password確認'" />
            
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
            type="password"
            name="password_confirmation" required autocomplete="new-password" />
            
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button
        class="text-white py-2 px-4 rounded-lg bg-purple-700 hover:bg-purple-600 shadow-md font-medium  transition-colors"
        >
        診断する
        </button>

        <div class="shadow-lg rounded p-8 bg-white h-100">
        <iframe src="https://www.16personalities.com/ja/%E6%80%A7%E6%A0%BC%E8%A8%BA%E6%96%AD%E3%83%86%E3%82%B9%E3%83%88" frameborder="0"></iframe>
        </div>
        


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ 'すでに会員登録していますか?' }}
            </a>

            <x-primary-button class="ml-4">
                {{ '登録' }}
            </x-primary-button>
        </div>
    </form>

</body>
</html>
