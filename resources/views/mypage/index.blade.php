{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
{{--  Googleログインしていない場合 --}}
@if(is_null($gid))
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    {{-- ユーザ情報更新失敗メッセージ表示 --}}
    @if (session('message'))
    <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3">
        {{ session('message') }}
    </div>
    @endif
  
    <div class="flex justify-center">
        <ul class="bg-white rounded-sm border border-gray-200 w-96 text-gray-900">
            <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">
                <a href="/mypage/{{ $id = Auth::id() }}/confirmation">
                    {{ __('会員情報の詳細・編集') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('favorite') }}">
                    {{ __('お気に入り一覧') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('teams') }}">
                    {{ __('利用規約') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('privacy') }}">
                    {{ __('プライバシーポリシー') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeVdT4D8S6ZuVVDoQqz_YyHacqxarB7jaUkPTa22VJC_wbIsg/viewform">
                    {{ __('お問い合わせ') }}
                </a>
            </li>
            
            <li class="px-6 py-2 w-full rounded-b-lg">
                <a href="{{ route('check') }}">
                    {{ __('退会') }}
                </a>
            </li>
        </ul>
    </div>
</div>

{{--  Googleログインしている場合 --}}
@else
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="flex justify-center">
        <ul class="bg-white rounded-sm border border-gray-200 w-96 text-gray-900">
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('favorite') }}">
                    {{ __('お気に入り一覧') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('teams') }}">
                    {{ __('利用規約') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="{{ route('privacy') }}">
                    {{ __('プライバシーポリシー') }}
                </a>
            </li>
            
            <li class="px-6 py-2 border-b border-gray-200 w-full">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSeVdT4D8S6ZuVVDoQqz_YyHacqxarB7jaUkPTa22VJC_wbIsg/viewform">
                    {{ __('お問い合わせ') }}
                </a>
            </li>
            
            <li class="px-6 py-2 w-full rounded-b-lg">
                <a href="{{ route('check') }}">
                    {{ __('退会') }}
                </a>
            </li>
        </ul>
    </div>
</div>
@endif
@endsection
{{-- footer呼び出し --}}
@include('common.footer')