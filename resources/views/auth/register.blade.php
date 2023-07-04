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
<body class="flex items-center justify-center h-screen">
    <div class="m-auto inset-0">
        <div class="m-2 mx-6">
            <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white">新規登録</h2>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-6">
                <label for="name" class="block font-medium text-sm text-gray-700">ユーザー名（ニックネーム）</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="input input-bordered input-primary w-full max-w-xs">
                @error('name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-6">
                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="input input-bordered input-primary w-full max-w-xs">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- birthday -->
            <div class="mt-6">
                <label for="birthday" class="block font-medium text-sm text-gray-700">誕生日</label>
                <input id="birthday" type="date" name="birthday" value="{{ old('birthday') }}" required autofocus autocomplete="birthday" class="input input-bordered input-primary w-full max-w-xs">
                @error('birthday')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!-- personality_id -->
            <div class="mt-6">
                <label for="personality_id" class="block font-medium text-sm text-gray-700">16タイプ性格診断結果</label>
                <select id="personality_id" name="personality_id" required autofocus autocomplete="personality_id" class="input input-bordered input-primary w-full max-w-xs">
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
                @error('personality_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!-- Password -->
            <div class="mt-6">
                <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="input input-bordered input-primary w-full max-w-xs">
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-6">
                <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Password（確認）</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input input-bordered input-primary w-full max-w-xs">
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4 flex justify-center">
                <button class="btn btn-active btn-success btn-sm mx-2">
                    {{ '上記の内容で登録する' }}
                </button>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a class="text-xs underline" href="{{ route('login') }}">
                    {{ 'すでに会員登録している方はこちら' }}
                </a>

            </div>
        </form> 
    </div>   
</body>
</html>