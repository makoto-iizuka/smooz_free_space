<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\View;

class Railroad extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'railroads';
    
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable=[
        'company_id',
        'railroad_name'
        ];
    
    /**
     * Companyに対するリレーション「多対1」の関係
     *
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
    /**
     * Stationに対するリレーション「1対多」の関係
     *
     */
    public function stations()
    {
        return $this->hasMany(Station::class);
    }
    
    /**
     * Viewに対するリレーション「1対多」の関係
     *
     */
    public function views()
    {
        return $this->hasMany(View::class);
    }
}
