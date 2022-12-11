{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<section class="text-gray-600 body-font bg-gray-100">
    <div class="container px-5 py-24 mx-auto bg-white shadow-md overflow-hidden rounded-lg">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">
                {{ __('お気に入り一覧') }}
            </h1>
        </div>
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <table class="table-fixed w-full text-left whitespace-no-wrap">
                <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">{{ __('路線名') }}</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">{{ __('駅名') }}</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">{{ __('詳細') }}</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">{{ __('お気に入り登録') }}</th>
                    </tr>
                </thead>
                @foreach($lists as $list)
                <tbody>
                    <tr>
                        <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900 bg-gray-50">{{ $list->view->station->railroad->railroad_name }}</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900 bg-gray-50">{{ $list->view->station->station_name }}</td>
                        <td class="border-t-2 border-gray-200 px-4 py-3 bg-gray-50">
                            <button class="bg-blue-600 hover:bg-blue-500 text-white rounded px-3 py-2">
                                <a href="/lists/{{ $list->view->railroad_id }}/{{ $list->view->station_id}}">
                                    {{ __('詳細') }}
                                </a>
                            </button>
                        </td>
                        <td class="border-t-2 border-gray-200 px-4 py-3 bg-gray-50">
                            {{-- 「いいね」取消用ボタンを表示 --}}
                            <span>
                                <button class="bg-red-600 hover:bg-red-500 text-white rounded px-3 py-2">
                                    <a href="{{ route('un_favo',$list->view_id) }}">
                                        {{ __('解除') }}
                                    </a>
                                </button>
                            </span>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')