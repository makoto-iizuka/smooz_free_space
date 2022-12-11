{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<x-guest-layout>
    <x-auth-card>
        {{-- Tittle --}}
        <div class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0">
            <span class="ml-3 text-sm">{{ __('退会の確認') }}</span>
        </div>
        
        {{-- Description --}}
        <div class="flex items-center justify-center text-gray-600 font-bold p-5 mb-4 md:mb-0">
            <span class="ml-3 text-sm">{{ __('退会をすると登録情報が削除されます。') }}
                <br> {{ __('それでも退会をしますか？') }}
            </span>
        </div>
        
        {{-- Delete --}}
        <form action="/mypage/destroy/{{ $id = Auth::id() }}" id="form_{{ $user->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="flex items-center justify-center mt-4">
                <button class="
                                inline-flex
                                text-white
                                items-center
                                bg-red-500
                                border-0
                                py-1
                                px-3
                                mx-2
                                focus:outline-none
                                hover:bg-red-400
                                rounded
                                text-base
                                mt-4
                                md:mt-0
                                ">
                    {{ __('退会') }}
                </button>
            </div>
        </form>
        
        {{-- Cancell --}}
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                <a href="{{ route('index') }}">
                    {{ __('キャンセルする') }}
                </a>
            </x-primary-button>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')