<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\View;

class Favorite extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     * 
     * @var string
     */
    protected $table = 'favorites';
    
    /**
     * 複数代入可能な属性
     * 
     * @var array
     */
    protected $fillable=[
        'user_id',
        'view_id',
        ];
    
    
    /**
     * Userに対するリレーション「多対1」の関係
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Viewに対するリレーション「多対1」の関係
     * 
     */
    public function view()
    {
        return $this->belongsTo(View::class);
    }
}
