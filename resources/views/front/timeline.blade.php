
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
<body class="bg-yellow-50 h-screen">
    <!-- 検索 -->
    <div class="pt-4">
        <button onclick="location.href='search'" type="button" class="btn bg-blue-200 btn-sm text-indigo-900">
            検索
        </button>
    </div>
    
    <div class="mt-5 flex justify-center bg-yellow-50 pb-16">
        <!-- このdivの中に出力される -->
        <div id="output"></div>
    </div>

    <!-- 条件分岐で表示するしない -->
        <!-- フッター（ログイン後固定） -->
        <ul class="grid grid-flow-col text-center text-white bg-red-300 p-1 fixed bottom-0 w-full">
            <li>
                <a href="/front/timeline" class="flex justify-center py-4">Home</a>
            </li>
            <li>
                <a href="{{ url('/front/timeline') }}" class="flex justify-center py-4" :class="{ 'active': request()->routeIs('front.timeline') }">test</a>
            </li>
            <li>
                <a href="/front/mypage" class="flex justify-center py-4">mypage</a>
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