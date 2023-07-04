<section class="flex items-center justify-center">
    <div class="max-w-md w-full">

        <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white">パスワード変更</h2>


       

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="m-auto w-full max-w-xs">
                <div class="mt-6">
                    <label for="current_password" class="block font-medium text-sm text-gray-700">現在のパスワード</label>
                    <input id="current_password" name="current_password" type="password"
                        class="input input-bordered input-primary w-full max-w-xs mb-2" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div>
                    <label for="password" class="block font-medium text-sm text-gray-700">新しいパスワード</label>
                    <input id="password" name="password" type="password" 
                    class="input input-bordered input-primary w-full max-w-xs mb-2" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div>
                    <label for="password_confirmation" class="block font-medium text-sm text-gray-700">新しいパスワード（確認）</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" 
                    class="input input-bordered input-primary w-full max-w-xs" autocomplete="new-password" /> 
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center gap-4">
                    <button type="submit" class="bg-purple-300 hover:bg-purple-200 text-white font-bold py-2 px-4 rounded mt-6">
                        {{ __('更新') }}
                    </button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600 dark:text-gray-400">{{ __('更新されました.') }}</p>
                    @endif
                </div>
            </div>
        </form>
    </div>
</section>
