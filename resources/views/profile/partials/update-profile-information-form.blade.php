<section class="flex items-center justify-center">
    <div class="max-w-md w-full">
        <h2 class="text-center text-xl font-semibold text-indigo-900">会員情報</h2>


        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div class="m-auto w-full max-w-xs">
                <div class="mt-6">
                    <label for="name" class="block font-medium text-sm text-indigo-900">名前</label>
                <input id="name" name="name" type="text"
                class="input input-bordered input-primary w-full max-w-xs"
                    value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                @if ($errors->has('name'))
                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="m-auto w-full max-w-xs">
                <div class="mt-6">
                    <label for="email" class="block font-medium text-sm text-indigo-900">Email</label>
                <input id="email" name="email" type="email"
                class="input input-bordered input-primary w-full max-w-xs text-indigo-900"
                    value="{{ old('email', $user->email) }}" required autocomplete="username" />
                @if ($errors->has('email'))
                    <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>
                @endif

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-indigo-900">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification"
                                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center justify-center gap-4">
                <button type="submit" class="btn bg-rose-200 btn-sm text-indigo-900 mt-4">
                    {{ __('更新') }}
                </button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('更新されました。') }}</p>
                @endif
            </div>

        </form>
    </div>
</section>

