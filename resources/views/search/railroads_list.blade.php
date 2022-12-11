{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')
{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<div class="max-w-2xl mx-auto bg-white p-16 rounded">
    <h1 class="
                flex
                flex-col
                text-center
                w-full
                mb-10
                sm:text-4xl
                text-3xl
                text-gray-900
                ">
                {{ __('線路一覧') }}
    </h1>
    
    {{-- 会社名とその配下の路線リンク表示 --}}
	@foreach ($companies as $company)
    <details class="
                    flex
                    items-center
                    border 
                    focus:ring-4
                    focus:ring-gray-200
                    dark:focus:ring-gray-800
                    border-gray-200
                    dark:border-gray-700
                    justify-between
                    p-5
                    w-full
                    font-medium
                    text-left
                    text-gray-500
                    dark:text-gray-400
                    hover:bg-gray-100
                    dark:hover:bg-gray-800
                    rounded-lg">
        <summary>{{ $company->company_name }}</summary>
        
        <div class="
                    p-5
                    border
                    border-gray-200
                    dark:border-gray-700
                    dark:bg-gray-900
                    border-b-0">
            <ul class="dark:text-gray-400 text-gray-500">
                
                @foreach ($company->railroads as $railroad)
				<li><a href="/lists/{{ $railroad->id }}"
					   class="text-blue-600 dark:text-blue-500 hover:underline">
				    {{ $railroad->railroad_name }}
				    </a>
				</li>
				@endforeach
				
			</ul>
        </div>
    </details>
    @endforeach
    
</div>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')