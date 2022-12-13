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
     * @param View $view, Request $request
     * @return back
     */
    public function favo(View $view, Request $request)
    {
        $favorite = new Favorite();
        $favorite->view_id = $view->id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        
        return redirect()->back();
       }
    
    /**
     * お気に入り削除
     * @param View $view, Request $request
     * @return back
     */
    public function unfavo(View $view, Request $request)
    {
        $user_id = Auth::user()->id;
        $favorite = Favorite::where('view_id', $view->id)->where('user_id', $user_id)->first();
        $favorite->delete();
        
        return redirect()->back();
    }
}
