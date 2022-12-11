<x-guest-layout>
    <x-auth-card>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Title -->
            <a class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0" href="{{ route('top') }}">
                <span class="ml-3 text-2xl">{{ __('アカウントを作成') }}</span>
            </a>
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('お名前')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('パスワード(確認用)')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
            <!-- Agreement -->
            <div class="block mt-4">
                <label for="agreement" class="inline-flex items-center">
                    <input id="agreement" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="agreement" required>
                    <span class="underline ml-2 text-sm text-blue-600 hover:text-blue-900">
                        <a href="{{ route('teams') }}">{{ __('利用規約') }}</a>
                    </span>
                    <span class="ml-2 text-sm text-gray-600">{{ __('、') }}</span>
                    <span class="underline ml-2 text-sm text-blue-600 hover:text-blue-900">
                        <a href="{{ route('privacy') }}">{{ __('プライバシーポリシー') }}</a>
                    </span>
                    <span class="ml-2 text-sm text-gray-600">{{ __('に同意します') }}</span>
                </label>
            </div>
            
            <!-- Register -->
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('すでに登録済みの方はこちら') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('登録') }}
                </x-primary-button>
            </div>
            
            <!-- Google Login -->
            <div class="flex items-center justify-center mt-4">
              <a href="{{ url('auth/google') }}">
                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
              </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
