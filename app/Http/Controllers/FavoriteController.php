<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Station;
use App\Models\View;
use App\Models\Favorite;


class FavoriteController extends Controller
{
    /**
     * お気に入り登録
     * @return back
     */
    public function favo(View $view, Request $request){
        $favorite=New Favorite();
        $favorite->view_id=$view->id;
        $favorite->user_id=Auth::user()->id;
        $favorite->save();
        
        return redirect()->back();
    }
    
    /**
     * お気に入り削除
     * @return back
     */
    public function unfavo(View $view, Request $request){
        $user=Auth::user()->id;
        $favorite=Favorite::where('view_id', $view->id)->where('user_id', $user)->first();
        $favorite->delete();
        
        return redirect()->back();
    }
}