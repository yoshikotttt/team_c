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
    <div class="container mt-5">
        <table class="table" id="mypageTable">
            <thead>
                <tr>
                    <th>
                        <h2>「関数」さんはこんなひと</h2>
                    </th>
                    <th>
                        <p>(合ってる？合ってない？編集しちゃえ！)</p>
                    </th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <a href="/create" class="btn btn-dark">create</a>
    </div>

    
    <!-- フッター（ログイン後固定） -->
    <ul class="grid grid-flow-col text-center text-gray-500 bg-gray-100 rounded-lg p-1">
        <li>
            <a href="#page1" class="flex justify-center py-4">Home</a>
        </li>
        <li>
            <a href="#page2" class="flex justify-center bg-white rounded-lg shadow text-indigo-900 py-4">Timeline</a>
        </li>
        <li>
            <a href="#page3" class="flex justify-center py-4">mypage</a>
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
    @vite('resources/js/mypage.js')
</body>
</html>