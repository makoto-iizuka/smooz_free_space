<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\View;
use App\Models\Favorite;

class MypageController extends Controller
{
    /**
     * マイページ画面表示
     * @param User $user
     * @return View マイページ画面
     */
    public function index(User $user)
    {
        $gid = Auth::user()->google_id;
        
        return view('/mypage/index')->with([
            'user' => $user,
            'gid' => $gid
            ]);
    }
    
    /**
     * ユーザ情報確認画面表示
     * @param User $user
     * @return View ユーザ情報確認画面
     */
    public function confirmation(User $user)
    {
        return view('/mypage/confirmation')->with([
            'user' => $user
            ]);
    }
    
    /**
     * プロフィール編集画面表示
     * @param Request $request, User $user
     * @return View プロフィール編集画面
     */
    public function edit(Request $request, User $user)
    {
        $password = $request['password'];
        $confirm_pass = $request['password_confirmation'];
        
        if (Hash::check($password, $user->password) && $password == $confirm_pass) {
            return view('/mypage/edit')->with([
                'user' => $user
                ]);
        } else {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(array('password' => 'パスワードが一致しません。'));
        }
    }
    
    /**
     * プロフィール編集機能（ユーザー名、メールアドレス）
     * @param User $user
     * @return Redirect トップ画面
     */
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $input_user = $request['user'];
        
        Validator::make($input_user, [
            'name'  => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            ]);
        
        $input_password =$input_user['password'];
        $confirm_pass = $request['password_confirmation'];
        
        if ($input_password == $confirm_pass) {
            $hash_password = bcrypt($input_password);
            $input_user['password'] = $hash_password;
            $user->fill($input_user)->save();
            
            return redirect('/');
        } else {
            return redirect('/mypage')->with(
                'message',
                'パスワードが一致しませんでした。大変お手数ですが最初からもう一度やり直してください'
            );
        }
    }
    
    /**
     * 退会前ユーザ情報確認画面表示
     * @param User $user
     * @return View 退会前ユーザ情報確認画面表示
     */
    public function destroyConfirmation(User $user)
    {
        return view('/mypage/destroy_confirmation')->with([
            'user' => $user
            ]);
    }
    
    /**
     * ユーザ退会確認画面表示
     * @param Request $request, User $user
     * @return View ユーザ退会確認画面
     */
    public function destroyUser(Request $request, User $user)
    {
        $password = $request['password'];
        $confirm_pass = $request['password_confirmation'];
        
        if (Hash::check($password, $user->password) && $password == $confirm_pass) {
            return view('/mypage/destroy')->with([
                'user' => $user
                ]);
        } else {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(array('password' => 'パスワードが一致しません。'));
        }
    }
    
    /**
     * ユーザ退会機能
     * @param $id
     * @return Redirect トップ画面
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect('/');
    }
    
    /**
     * お気に入り画面表示
     * @return View お気に入り画面
     */
    public function favorite()
    {
        $id = Auth::id();
        $favorite = Favorite::where('user_id', $id)->get();
        $lists = Favorite::with('view', 'view.station', 'view.station.railroad')
                            ->where('user_id', $id)->get();
        
        return view('/search/favorite')->with([
            'favorite'=>$favorite,
            'lists'=>$lists
            ]);
    }
}
