
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <!-- 検索 -->
    <button onclick="location.href='search'" type="button" class="btn btn-primary">
        検索
    </button>
    
    <div class="container mt-5">
        <!-- このdivの中に出力される -->
        <div id="output"></div>
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
    @vite('resources/js/timeline.js')
</body>
</html>