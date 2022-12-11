<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\View;

class Station extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'stations';
    
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable=[
        'railroad_id',
        'station_name'
        ];
    
    /**
     * Viewに対するリレーション「1対多」の関係
     *
     */
    public function views()
    {
        return $this->hasMany(View::class);
    }
    
    /**
     * Stationに対するリレーション「多対1」の関係
     *
     */
    public function railroad()
    {
        return $this->belongsTo(Railroad::class);
    }
    
}
