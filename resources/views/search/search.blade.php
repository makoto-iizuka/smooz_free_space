{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

<div class="flex justify-center">
  <ul class="bg-white rounded-sm border border-gray-200 w-96 text-gray-900">
    @foreach ($searchs as $search)
    <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg"><a href="/search/{{ $line->id }}">{{ $}}</a></li>
    <li class="px-6 py-2 border-b border-gray-200 w-full"><a href="/history">閲覧履歴</a></li>
    @endforeach
  </ul>
</div>

    
</div>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')