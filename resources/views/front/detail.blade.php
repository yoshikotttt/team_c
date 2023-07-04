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
    {{-- 直接編集画面へ行く --}}
    <!-- <button onclick="location.href='detail_edit'" type="button" class="btn btn-primary">Edit</button> -->

    <!-- 秘密の質問へリンク -->
    {{-- <button onclick="location.href='secret'" type="button" class="btn btn-primary">Edit</button> --}}


    <div class="container mt-5 mx-auto">
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center max-w-3xl mx-auto bg-error rounded-2xl m-4 py-4 px-20 sm:max-w-760 w-full">

                <h2 id="name" class="text-xl p-2 font-bold"></h2>
                <p id="type"></p>
            </div>
            <div id="name1">
                <!-- これでconstで指定した関数呼び出せる？ -->
                {{-- <h2>${username}さんはこんなひと</h2> --}}
            </div>
            <div class="flex justify-between items-center">
                {{-- <h2>{{ Auth::user()->name }}さんはこんなひと</h2> --}}
                <p class="font-bold mr-12 ">(合ってる？合ってない？編集しちゃえ！)</p>
                <div id="secretbtn"></div>
            </div>
            {{-- <div>
                <p class="font-bold">(合ってる？合ってない？編集しちゃえ！)</p>
            </div>
            <div id="secretbtn" class="btn btn-primary mt-4"></div> --}}
            <!-- このdivの中に性格タイプが出力される -->
            <div id="type"></div>
            <!-- このdivの中に説明文が出力される -->
            <div class="flex flex-col items-center justify-center max-w-3xl mx-auto bg-secondary rounded-2xl py-8 px-4 mt-6 sm:max-w-760 w-full max-w-760">
                <p class="text-center mb-3 font-bold">16タイプ性格診断結果</p>
                <div class="flex items-center justify-center">
                    <div id="output"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mx-auto">
        <div class="flex flex-col items-center">
            <div class="text-center flex flex-col items-center max-w-3xl mx-auto bg-emerald-400 rounded-2xl m-4 py-4 px-20 sm:max-w-760 w-full">
                <div id="name2" class="font-bold text-xl" >
                    {{-- <!-- これでconstで指定した関数呼び出せる？ -->
                <h2>${username}さんはこんなひと</h2> --}}
                </div>
            </div>
            {{-- <p class="font-bold">(みんなからはこう見えてるよ！)</p> --}}
            <!-- このdivの中に出力される -->
            <div class="flex items-center justify-center rounded-2xl bg-accent py-8 px-4 mt-6 max-w-3xl mx-auto sm:max-w-760 w-full">
                <div id="output2"></div>
            </div>
        </div>
    </div>

    <!-- 条件分岐で表示するしない -->
    <!-- フッター（ログイン後固定） -->
    <ul class="grid grid-flow-col text-center text-gray-500 bg-gray-100 rounded-lg p-1">
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
    @vite('resources/js/detail.js')
</body>

</html>
