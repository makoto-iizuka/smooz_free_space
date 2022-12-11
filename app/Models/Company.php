<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prefecture;
use App\Models\Railroad;

class Company extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'companies';
    
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable=[
        'prefecture_id',
        'company_name',
        ];
    
    /**
     * Prefectureに対するリレーション「多対1」の関係
     *
     */
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    /**
     * Railroadに対するリレーション「1対多」の関係
     *
     */
    public function railroads()
    {
        return $this->hasMany(Railroad::class);
    }
}
