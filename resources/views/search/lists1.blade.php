{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<div class="max-w-2xl mx-auto bg-white p-16 rounded">
	<h1 class="flex flex-col text-center w-full mb-10 sm:text-4xl text-3xl text-gray-900">線路一覧</h1>
	<!-- JR線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>JR線</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">山手線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京浜東北・山岸線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">中央線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">総武線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東海道本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">常磐線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">横浜線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">埼京線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">南武線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">横須賀線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">武蔵野線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">高崎線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京葉線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東北本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">中央本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">総武本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">青梅線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">八高線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">五日市線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東海道新幹線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東北新幹線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">上越新幹線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">北陸新幹線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">湘南新宿ライン宇須</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">湘南新宿ライン高梅</a></li>
			</ul>
        </div>
    </details>
    <!-- ゆりかもめ -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>ゆりかもめ</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">新交通ゆりかもめ</li>
			</ul>
        </div>
    </details>
    <!-- 京王線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>京王電鉄</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王井の頭線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王相模原線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王相高尾線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王動物園線</a></li>
						<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京王競馬場線</a></li>
			</ul>
        </div>
    </details>
    <!-- 京成線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>京成電鉄</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京成本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京成押上線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京成金町線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">成田スカイアクセス</a></li>
			</ul>
        </div>
    </details>
    <!-- 京成線一覧2 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>京浜急行電鉄</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京成本線</a></li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">京成空港線</a></li>
			</ul>
        </div>
    </details>
    <!-- 埼玉高速鉄道 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>埼玉高速鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">埼玉高速鉄道</li>
			</ul>
        </div>
    </details>
    <!-- 小田急線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>小田急電鉄</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">小田急小田原線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">小田急多摩線</li>
			</ul>
        </div>
    </details>
    <!-- 西武線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>西武鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武池袋線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武新宿線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武拝島線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武有楽町線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武多摩湖線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西部多摩川線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武国分寺線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武豊島線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武山口線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">西武西武園線</li>
			</ul>
        </div>
    </details>
    <!-- 多摩都市モノレール -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>多摩都市モノレール</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">多摩都市モノレール</li>
			</ul>
        </div>
    </details>
    <!-- 東京モノレール -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>東京モノレール</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東京モノレール</li>
			</ul>
        </div>
    </details>
    <!-- 東急線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>東急</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急東横線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急田園都市線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急池袋線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急大井町線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急目黒線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急多摩川線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東急世田谷線</li>
			</ul>
        </div>
    </details>
    <!-- 東京メトロ線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>東京メトロ</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東西線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">有楽町線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">丸ノ内線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">日比谷線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">千代田線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">南北線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">銀座線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">半蔵門線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">副都心線</li>
			</ul>
        </div>
    </details>
    <!-- 都営地下鉄線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>都営地下鉄</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">都営大江戸線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">都営三田線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">都営新宿線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">都営浅草線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">都電荒川線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">日暮里舎人ライナー</li>
			</ul>
        </div>
    </details>
    <!-- 東京臨海高速鉄道 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>東京臨海高速鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東京臨海高速鉄道りんかい線</li>
			</ul>
        </div>
    </details>
    <!-- 東武線一覧 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>東武鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東武東上線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東武伊勢崎線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東武大師線</li>
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">東武亀戸線</li>
			</ul>
        </div>
    </details>
    <!-- 北総鉄道 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>北総鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">北総鉄道</li>
			</ul>
        </div>
    </details>
    <!-- 首都圏新都市鉄道 -->
    <details class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">
        <summary>首都圏新都市鉄道</summary>
        <div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
            <ul class=" dark:text-gray-400 text-gray-500">
				<li><a href="###"
						class="text-blue-600 dark:text-blue-500 hover:underline">つくばエクスプレス</li>
			</ul>
        </div>
    </details>
</div>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')