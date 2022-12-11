{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    {{-- 入力された文字の表示 --}}
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="
                    sm:text-3xl
                    text-2xl
                    font-medium
                    title-font
                    mb-4
                    text-gray-900
                   ">
                    {{ __('「') }}{{ $input }}{{ __('」の検索結果') }}
        </h1>
    </div>
    
    {{-- エラーメッセージの表示 --}}
    @if (!is_null($message) || $views->isEmpty() && $companies->isEmpty())
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3">
        {{ $message }}
    </div>
    @endif
    
    {{-- 路線名または駅名の結果表示 --}}
    @if (is_null($message))
        @foreach ($views as $view)
        <div class="p-3 w-full items-center ">
            <a class="link" href="/lists/{{ $view->railroad_id }}/{{ $view->station_id }}">
                <div class="
                            h-full
                            flex
                            justify-items-stretch
                            border-gray-200
                            border
                            p-4
                            rounded-lg
                            hover:bg-gray-100
                            dark:hover:bg-gray-800
                            ">
                    <h2 class="
                                text-gray-900
                                title-font
                                font-medium
                                hover:underline
                                dark:text-blue-500
                                ">
                                {{ $view->railroad_name }}/{{ $view->station_name }}{{ __('駅') }}
                    </h2>
                </div>
            </a>
        </div>
        @endforeach
 
        {{-- 会社名の結果表示 --}}
        @foreach ($companies as $company)
        <div class="p-3 w-full items-center ">
            <a class="link" href="/lists/{{ $company->id }}">
                <div class="
                            h-full
                            flex
                            justify-items-stretch
                            border-gray-200
                            border
                            p-4
                            rounded-lg
                            hover:bg-gray-100
                            dark:hover:bg-gray-800
                            ">
                    <h2 class="
                                text-gray-900
                                title-font
                                font-medium
                                hover:underline
                                dark:text-blue-500
                                ">
                                {{ $company->company_name }}/{{ $company->railroad_name }}
                    </h2>
                </div>
            </a>
        </div>
        @endforeach
        
    @endif
  </div>
</section>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')