{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    {{-- 路線名表示 --}}
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="
                    sm:text-3xl
                    text-2xl
                    font-medium
                    title-font
                    mb-4
                    text-gray-900
                   ">
                    {{ $railroad_name->railroad_name }}
        </h1>
    </div>
    
    {{-- 路線内の駅リンク表示 --}}
    @foreach($stations as $station)
    <div class="p-3 w-full items-center ">
        <a class="station-link" href="/lists/{{ $railroad_name->id }}/{{ $station->id }}">
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
                            {{ $station->station_name }}
                </h2>
            </div>
        </a>
    </div>
    @endforeach
    
  </div>
</section>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')