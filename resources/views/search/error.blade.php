{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

<div class="flex justify-center">
  <p class="bg-white rounded-sm border border-gray-200 w-96 text-gray-900">該当するものは見つかりませんでした。
  </p>
</div>

    
</div>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')