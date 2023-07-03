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
    <!-- タイムラインへもどる -->
    <button onclick="location.href='timeline'" type="button" class="btn btn-primary">
        戻る
    </button>
    
    <form id="searchForm">
        @csrf

        <!-- キーワード検索エリア -->
        <div>
            <x-input-label for="keyword" :value="'友達をidから検索できます。※idはmypageのものを入力ください。'" />
            <x-text-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword')" />
        </div>
        
        <div class="flex items-center justify-end mt-4">
            {{-- <x-primary-button class="ml-4">
                {{ '検索' }}
            </x-primary-button> --}}
            <button type="submit" class="btn btn-primary">検索</button>
        </div>
    </form>
    <div id="output"></div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    @vite('resources/js/app.js')

    <!-- Custom JS -->
    @vite('resources/js/search.js')
    

</body>
</html>