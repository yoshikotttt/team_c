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
    <!-- 条件分岐で表示する件数を制限、編集ボタンを表示しない -->
   <button onclick="location.href='/edit?id=${sentences.id}'" type="button" class="btn btn-primary">Edit</button>

   <div class="container mt-5">
        <div>
            <div>
                <!-- これでconstで指定した関数呼び出せる？ -->
                <h2>${username}さんはこんなひと</h2>
                <p>(合ってる？合ってない？編集しちゃえ！)</p>
            </div>
            <!-- このdivの中に性格タイプが出力される -->
            <div id="type"></div>
            <!-- このdivの中に説明文が出力される -->
            <div id="output"></div>
        </div>
    </div>

   <div class="container mt-5">
        <div>
            <div>
                <h2>つまり、「関数」さんはこんなひと</h2>
                <p>(みんなからはこう見えてるよ！)</p>
            </div>
            <!-- このdivの中に出力される -->
            <div id="output2"></div>
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
                <a href="#page4" class="flex justify-center py-4">設定</a>
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