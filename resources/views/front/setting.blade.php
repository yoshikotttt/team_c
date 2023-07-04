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
    <!-- 既存(navigation.blade.php）の変更のものを参考に作成？ -->

    <!-- フッター（ログイン後固定） -->
    <ul class="grid grid-flow-col text-center text-white bg-red-300 p-1 fixed bottom-0 w-full">
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
</body>
</html>