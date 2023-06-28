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
   <button onclick="location.href='/edit?id=${sentences.id}'" type="button" class="btn btn-primary">Edit</button>;

    <!-- 条件分岐で表示するしない -->
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
</body>
</html>