{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<!-- 認証によって、ボタン表示の切り替え -->
@auth
<!-- ログイン済みならお気に入りボタン表示 -->
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 items-center">
            <a class="mr-5 hover:text-gray-900 " href="{{ route('top') }}">{{ __('｜　トップ画面　｜') }}</a>
            <a class="mr-5 hover:text-gray-900" href="{{ route('lists') }}">{{ __('路線一覧　｜') }}</a>
        </nav>
    </div>
    <div class="container px-5 py-24 mx-auto bg-white shadow-md overflow-hidden rounded-lg">
        {{-- 駅名表示 --}}
        <div class="flex text-center w-full mb-20">
            <h1 class="
                        sm:text-3xl
                        text-2xl
                        font-medium
                        title-font
                        mb-4
                        text-gray-900
                        w-3/4
                       ">
                        {{ $station_name->station_name }}{{ __('駅') }}
            </h1>
            
            {{-- お気に入りボタン --}}
            <span>
                {{-- もし$favoriteがあれば＝ユーザーが「いいね」をしていたら --}}
                @if(!is_null($favorite))
                {{-- 「いいね」取消用ボタンを表示 --}}
                <button class="bg-red-600 hover:bg-red-500 text-white rounded px-3 py-2">
                    <a href="{{ route('un_favo', $view) }}">
                        お気に入り解除
                    </a>
                </button>
                @else
                {{-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 --}}
                <button class="bg-green-600 hover:bg-green-500 text-white rounded px-3 py-2">
                    <a href="{{ route('favo', $view) }}">
                        お気に入り登録
                    </a>
                </button>
                @endif
            </span>
        </div>
        
        {{-- 画像表示 --}}
        @foreach($details as $detail)
        <div class="p-3 w-full items-center ">
            <figure class="size-full">
                @if (isset($detail->image1))
                    <img src="{{ $detail->image1 }}" 
                         alt="" 
                         class="w-6642 h-3957 p-4">
                    </img>
                @endif
                
                @if (isset($detail->image2))
                    <img src="{{ $detail->image2 }}"
                         alt=""
                         class="w-6642 h-3957 p-4" >
                    </img>
                @endif
                
                @if (isset($detail->image3))
                    <img src="{{ $detail->image3 }}" 
                         alt="" 
                         class="w-6642 h-3957 p-4">
                    </img>
                @endif
            </figure>
        </div>
        @endforeach
    </div>
</section>
@else
<!-- ログインしていない場合、お気に入りボタン非表示 -->
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 items-center">
            <a class="mr-5 hover:text-gray-900 " href="{{ route('top') }}">{{ __('｜　トップ画面　｜') }}</a>
            <a class="mr-5 hover:text-gray-900" href="{{ route('lists') }}">{{ __('路線一覧　｜') }}</a>
        </nav>
    </div>
    <div class="container px-5 py-24 mx-auto bg-white shadow-md overflow-hidden rounded-lg">
        {{-- 駅名表示 --}}
        <div class="flex text-center w-full mb-20">
            <h1 class="
                        sm:text-3xl
                        text-2xl
                        font-medium
                        title-font
                        mb-4
                        text-gray-900
                        w-full
                       ">
                        {{ $station_name->station_name }}{{ __('駅') }}
            </h1>
        </div>
        {{-- 画像表示 --}}
        @foreach($details as $detail)
        <div class="p-3 w-full items-center">
            <figure class="size-full">
                @if (isset($detail->image1))
                    <img src="{{ $detail->image1 }}" 
                         alt="" 
                         class="w-6642 h-3957 p-4">
                    </img>
                @endif
                
                @if (isset($detail->image2))
                    <img src="{{ $detail->image2 }}"
                         alt=""
                         class="w-6642 h-3957 p-4" >
                    </img>
                @endif
                
                @if (isset($detail->image3))
                    <img src="{{ $detail->image3 }}" 
                         alt="" 
                         class="w-6642 h-3957 p-4">
                    </img>
                @endif
            </figure>
        </div>
        @endforeach
    </div>
</section>
@endauth
@endsection
{{-- footer呼び出し --}}
@include('common.footer')