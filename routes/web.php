<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavoriteController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Conmany;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\View;
use App\Models\Favorite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#Route::get('/', function () {
#    return view('welcome');
#});

require __DIR__.'/auth.php';

/**
 * トップ画面表示
 */
Route::get('/', [TopController::class, 'top'])->name('top');

/**
 * Googleログイン表示
 */
Route::get("auth/redirect", [
  GoogleLoginController::class,
  "getGoogleAuth",
]);

Route::get("auth/callback", [
  GoogleLoginController::class,
  "authGoogleCallback",
]);

/**
 * MypageController用グループ設定
 * Authミドルウェア適用
 */
Route::controller(MypageController::class)->middleware(['auth'])->group(function(){
  /**
   * マイページ画面表示
   */
  Route::get('/mypage','index')->name('index');
  
  /**
   * 編集前ユーザ情報確認画面表示
   */
  Route::get('/mypage/{user}/confirmation', 'confirmation')->name('maypage.config');
  /**
   * パスワードリセット画面表示
   */
  Route::get('/forgot-password', function () {
    return view('auth.forgot-password');})->name('password.request');
  /**
   * ユーザ情報編集画面表示
   */
  Route::get('/mypage/{user}/edit', 'edit');
  Route::post('/mypage/{user}/edit', 'edit');
  /**
   * ユーザ情報編集処理
   */
  Route::put('/mypage/{user}/edit', 'update');
  
  /**
   * 退会前ユーザ情報確認画面表示
   */
  Route::get('/mypage/destroy/check', 'destroyConfirmation')->name('check');
  /**
   * ユーザ退会確認画面表示
   */
  Route::post('/mypage/destroy/{user}', 'destroyUser');
  /**
   * ユーザ退会処理
   */
  Route::delete('/mypage/destroy/{user}', 'destroy');
  
  /**
   * お気に入り表示
   */
  Route::get('/favorite','favorite')->name('favorite');
});

/**
 * 利用規約画面表示
 */
Route::get('/teams', [TopController::class, 'teams'])->name('teams');

/**
 * プライバシーポリシー表示
 */
Route::get('/privacy', [TopController::class, 'privacy'])->name('privacy');

/**
 * 閲覧履歴表示
 */
Route::get('/history', [SearchController::class, 'history'])->name('history');

/**
 * 路線一覧表示
 */
Route::get('/lists', [SearchController::class, 'lists'])->name('lists');

/**
 * 路線一覧->駅一覧表示
 */
Route::get('/lists/{railroad_id}', [SearchController::class, 'stations'])->name('stations');

/**
 * 路線一覧->駅一覧->詳細表示
 */
Route::get('/lists/{railroad_id}/{station_id}', [SearchController::class, 'detail'])->name('detail');

/**
 * トップ画面->検索結果表示
 */
Route::get('/show', [SearchController::class, 'search'])->name('search');
Route::post('/show', [SearchController::class, 'search'])->name('search');

/**
 * お気に入り処理
 */
Route::get('/reply/favo/{view}', [FavoriteController::class, 'favo'])->name('favo');
Route::get('/reply/unfavo{view}', [FavoriteController::class, 'unfavo'])->name('un_favo');

