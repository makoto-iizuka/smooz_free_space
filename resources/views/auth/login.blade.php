<x-guest-layout>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Title -->
            <a class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0" href="{{ route('top') }}">
                <span class="ml-3 text-2xl">{{ __('ログイン') }}</span>
            </a>
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email"
                              class="block mt-1 w-full"
                              type="email"
                              name="email"
                              :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password"
                              class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me"
                           type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保存') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('パスワードを忘れた場合はこちら') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('ログイン') }}
                </x-primary-button>
            </div>
            
            <!-- Google Login -->
            <div class="flex items-center justify-center mt-4">
              <a href="{{ url('auth/redirect') }}">
                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
              </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
