<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * トップ画面表示
     * @return View トップ画面
     */
    public function top()
    {
        return view('top');
    }

    /**
     * 利用規約画面表示
     * @return View 利用規約画面
     */
    public function teams()
    {
        return view('/common/teams');
    }

    /**
     * プライバシーポリシー画面表示
     * @return View プライバシーポリシー画面
     */
    public function privacy()
    {
        return view('/common/privacy');
    }
}
