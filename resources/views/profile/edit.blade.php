<!DOCTYPE html>
<html lang="ja" data-theme="pastel">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-yellow-50">
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8  sm:rounded-lg">
                    <div class="max-w-xl m-auto">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8  sm:rounded-lg">
                    <div class="max-w-xl m-auto">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8  sm:rounded-lg">
                    <div class="max-w-xl m-auto">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
        <!-- フッター（ログイン後固定） -->
        <ul class="grid grid-flow-col text-center text-white bg-red-300 p-1 fixed bottom-0 w-full">
            <li>
                <a href="/project/front/timeline" class="flex justify-center py-4">Home</a>
            </li>
            <li>
                <a href="/project/front/mypage" class="flex justify-center py-4">mypage</a>
            </li>
            <li>
                <a href="/project/profile" class="flex justify-center py-4">設定</a>
            </li>
        </ul>
</body>

</html>
{{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}
