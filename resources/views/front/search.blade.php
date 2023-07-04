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
    <!-- タイムラインへもどる -->
    <button onclick="location.href='timeline'" type="button" class="mt-5 ml-5 btn btn-primary">
        戻る
    </button>
    <h2 class="mt-10 font-bold text-center text-xl">検索</h2>
    <p class="mt-3 text-center">idもしくは性格タイプからユーザーを検索できます。</p>
    <form id="searchForm">
        @csrf

        <!-- キーワード検索エリア -->
        <div class="mt-24">
            <x-input-label for="keyword" class="mt-3 text-center" :value="'idから検索 ※idはmypageのものを入力ください。'" />
            <x-text-input id="keyword" class="block h-10 mt-5 w-4/5 mx-auto" type="text" name="keyword" :value="old('keyword')" />
        </div>
        
        <div class="flex justify-center  mt-4 mx-auto">
            {{-- <x-primary-button class="ml-4">
                {{ '検索' }}
            </x-primary-button> --}}
            <button type="submit" class="btn btn-primary">検索</button>
        </div>
    </form>

        <form id="searchForm2">
        @csrf

        <!-- キーワード検索エリア -->
        <div class="mt-24">
            <x-input-label class="mt-3 text-center" for="keyword2" :value="'性格タイプで検索'" />
            <select id="keyword2" class="block  w-4/5 mx-auto h-10 mt-5" name="keyword2" required autofocus autocomplete="keyword2">
                <option value="">選択してください</option>
                <option value="1">INTJ 建築家_分析家</option>
                <option value="2">INTP 論理学者_分析家</option>
                <option value="3">ENTJ 指揮官_分析家</option>
                <option value="4">ENTP 討論者_分析家</option>
                <option value="5">INFJ 提唱者_外交官</option>
                <option value="6">INFP 仲介者_外交官</option>
                <option value="7">ENFJ 主人公_外交官</option>
                <option value="8">ENFP 運動家_外交官</option>
                <option value="9">ISTJ 管理者_番人</option>
                <option value="10">ISFJ 擁護者_番人</option>
                <option value="11">ESTJ 幹部_番人</option>
                <option value="12">ESFJ 領事_番人</option>
                <option value="13">ISTP 巨匠_探検家</option>
                <option value="14">ISFP 冒険家_探検家</option>
                <option value="15">ESTP 起業家_探検家</option>
                <option value="16">ESFP エンターテイナー_探検家</option>
            </select>
        </div>
        
        <div class="flex justify-center  mt-4">
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