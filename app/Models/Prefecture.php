<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Prefecture extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'prefectures';
    
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable=[
        'prefecture_name',
        ];
    
    /**
     * Companyに対するリレーション「1対多」の関係
     *
     */
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
