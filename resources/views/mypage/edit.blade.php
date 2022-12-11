{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
@section('content')
<x-guest-layout>
    <x-auth-card>
        <form method="POST" action="/mypage/{{ $id = Auth::id() }}/edit">
            @csrf
            @method('PUT')
            {{-- Title --}}
            <div class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0">
                <span class="ml-3 text-2xl">
                    {{ __('ユーザ情報詳細・編集') }}
                </span>
            </div>
            {{-- Name --}}
            <div>
                <x-input-label for="name" :value="__('お名前')" />

                <x-text-input id="name"
                              class="block mt-1 w-full" 
                              type="text" 
                              name="user[name]" 
                              :value="Auth::user()->name"
                              required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Email Address --}}
            <div class="mt-4">
                <x-input-label for="email" :value="__('メールアドレス')" />

                <x-text-input id="email"
                              class="block mt-1 w-full" 
                              type="email" 
                              name="user[email]" 
                              :value="Auth::user()->email"
                              required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Password --}}
            <div class="mt-4">
                <x-input-label for="password" :value="__('パスワード')" />

                <x-text-input id="password"
                              class="block mt-1 w-full"
                              type="password"
                              name="user[password]"
                              required />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Confirm Password --}}
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('パスワード(確認用)')" />

                <x-text-input id="password_confirmation"
                              class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation"
                              required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            
            {{-- Submit --}}
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4" type='submit'>
                    {{ __('更新') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

        @endsection
{{-- footer呼び出し --}}
@include('common.footer')