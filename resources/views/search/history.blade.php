{{-- layouts.common.blade.phpのレイアウト継承 --}}
@extends('layouts.common')

{{-- header呼び出し --}}
@include('common.header')
{{-- Top画面 --}}
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">閲覧履歴</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">都道府県</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">路線名</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">駅名</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">XXXX</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">XXXX</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">XXXX</td>
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="checkbox">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
      <button class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">お気に入り登録</button>
    </div>
  </div>
</section>
@endsection
{{-- footer呼び出し --}}
@include('common.footer')