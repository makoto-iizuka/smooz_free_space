{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
@section('content')
<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="/mypage/{{ $id = Auth::id() }}/edit">
            @csrf
            {{-- Title --}}
            <div class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0">
                <span class="ml-3 text-sm">
                    {{ __('ユーザ情報確認の為、パスワードを入力してください。') }}
                </span>
            </div>
            {{-- Password --}}
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password"
                              class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Confirm Password --}}
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('パスワード(確認用)')" />

                <x-text-input id="password_confirmation"
                              class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
            {{-- Submit --}}
            <div class="flex items-center justify-end mt-4">
                
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('パスワードを忘れた場合はこちら') }}
                    </a>
                
                <x-primary-button class="ml-4" type='submit'>
                    {{ __('確認') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')