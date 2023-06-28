<!-- original_id -->
        <div>
            <!-- forでキーを設定。valueはラベルとして表示される-->
            <x-input-label for="birthday" :value="'オリジナルid（隠す予定）'" />
            <!-- 実際にユーザーが入力した文字。idでキーを照合。old（birthday）は前回の入力履歴を表示させるため-->
            <x-text-input id="original_id" class="block mt-1 w-full" type="text" name="original_id" :value="''.Str::random(8)" required autofocus autocomplete="original_id" readonly />

            <!-- 入力忘れ時等のエラー -->
            <x-input-error :messages="$errors->get('original_id')" class="mt-2" />
        </div>