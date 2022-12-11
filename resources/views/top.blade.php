{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container px-5 py-24 mx-auto bg-white shadow-md overflow-hidden rounded-lg">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                    {{ __('駅・路線から探す') }}
                </h1>
            </div>
        　　<div class="text-center text-base font-light leading-relaxed mt-0 mb-4 text-gray-800">
        　      <p>
        　          {{ __('東京都の路線で電車のベビーカースペース・車椅子スペースの設置位置を検索できます。') }}
        　      </p>
        　　</div>
        </div>
        <div class="flex justify-center">
            <form method="POST"
                  action="{{ route('search') }}"
                  class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                  @csrf
                <input type="search"
                       placeholder="○○駅、○○線"
                       value=""
                       name="keyword"
                       class="
                              px-4
                              py-2
                              text-gray-700
                              bg-white
                              border
                              rounded-md
                              sm:mx-2
                              focus:border-blue-400
                              dark:focus:border-blue-300
                              focus:outline-none
                              focus:ring
                              focus:ring-blue-300
                              focus:ring-opacity-40">
                    <button class="
                                   px-4
                                   py-2
                                   text-sm
                                   font-medium
                                   tracking-wide
                                   text-white
                                   capitalize
                                   transition-colors
                                   duration-300
                                   transform
                                   bg-blue-700
                                   rounded-md
                                   sm:mx-2
                                   hover:bg-blue-600
                                   focus:outline-none
                                   focus:bg-blue-600"
                            type="submit"
                            name="search">
                            {{ __('検索') }}
                    </button>
            </form>
        </div>
        <div class="container px-5 py-12 mx-auto">
            <h2 class="text-base font-midium leading-relaxed mt-0 mb-4 text-gray-800">
                {{ __('このサイトについて') }}
            </h2>
            <p class="text-base font-light leading-relaxed mt-0 mb-4 text-gray-800">
                {{ __('当サイトでは、電車のベビーカースペースおよび車椅子スペースの設置位置を検索できます。') }}
            </p>
            <p class="text-base font-light leading-relaxed mt-0 mb-4 text-gray-800">
                {{ __('当サイトの情報は管理人の調査より公開しています。当サイトの情報に関して鉄道会社へ問い合わせることはご遠慮ください。') }}
            </p>
        </div>
    </div>
</section>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')