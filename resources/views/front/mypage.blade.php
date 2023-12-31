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

<body class="text-indigo-900 bg-yellow-50 h-screen">
    <!-- 秘密の質問へリンク -->

    <div class="flex justify-end">
        <div id="original_id" class=" bg-red-100 p-2 m-4 rounded-2xl">ID：{{ Auth::user()->original_id }}</div>
    </div>
    <div class="container mt-5 mx-auto">
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center max-w-3xl mx-auto bg-rose-300 rounded-2xl m-4 py-4 px-20 sm:max-w-760 w-full">
                <h2 class="text-xl p-2 font-bold">{{ Auth::user()->name }}さん</h2>
                <input type="hidden" id="type" data-personality-id="{{ Auth::user()->personality_id }}">
                <input type="hidden" id="use_id" data-user-id="{{ Auth::user()->id }}">
                <div id="personality"></div>
            </div>
            <div class="flex justify-between items-center">
                {{-- <h2>{{ Auth::user()->name }}さんはこんなひと</h2> --}}
                <p class="font-bold text-xs mr-4">(合ってる？合ってない？編集しちゃえ！)</p>
                <button onclick="location.href='secret?id={{ Auth::user()->id }}'" type="button" class="btn bg-blue-200">編集</button>
            </div>
           
            <!-- このdivの中に性格タイプが出力される -->
            <div id="type"></div>
            <!-- このdivの中に説明文が出力される -->

            <div class="flex flex-col items-center justify-center max-w-3xl mx-auto bg-rose-100 rounded-2xl py-8 px-4 mt-6 sm:max-w-760 w-full max-w-760">
                <p class="text-center mb-3 font-bold">16タイプ性格診断結果</p>
                <div class="flex items-center justify-center">
                    <div id="output"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mx-auto">
        <div class="flex flex-col items-center">
            <div class="text-center flex flex-col items-center max-w-3xl mx-auto bg-emerald-300 rounded-2xl mt-4 py-4 px-20 sm:max-w-760 w-full">
                <h2 class="font-bold">つまり、<br>{{ Auth::user()->name }}さんはこんなひと</h2>

            </div>
            {{-- <p class="font-bold">(みんなからはこう見えてるよ！)</p> --}}
            <!-- このdivの中に出力される -->
            <div class="flex flex-col items-center justify-center rounded-2xl  bg-emerald-100 py-4  mb-20 mt-4 max-w-3xl mx-auto sm:max-w-760 w-full">
              <h2 class="font-bold">コメント一覧</h2>
                <div id="output2"></div>
            </div>
        </div>
    </div>


    <!-- フッター（ログイン後固定） -->
    <ul class="grid grid-flow-col text-center text-white bg-red-300 p-1 fixed bottom-0 w-full">
        <li>
            <a href="timeline" class="flex justify-center py-4">Home</a>
        </li>
        <li>
            <a href="mypage" class="flex justify-center py-4">mypage</a>
        </li>
        <li>
            <a href="/profile" class="flex justify-center py-4">設定</a>
        </li>
    </ul>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    @vite('resources/js/app.js')

    <!-- Custom JS -->
    @vite('resources/js/mypage.js')
</body>

</html>
