<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\Favorite;


class View extends Model
{
    use HasFactory;
    
    /**
     * モデルに関連付けるテーブル
     *
     * @var string
     */
    protected $table = 'views';
    
    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable=[
        'railroad_id',
        'station_id',
        'image1',
        'image2',
        'image3'
        ];
    
    /**
     * Stationに対するリレーション「多対1」の関係
     *
     */
    public function station()
    {
        return $this->belongsTo(Station::class);
    }
    
    /**
     * Railroadに対するリレーション「多対1」の関係
     *
     */
    public function railroad()
    {
        return $this->belongsTo(Railroad::class);
    }
    
    /**
     * Favoriteに対するリレーション「1対多」の関係
     *
     */
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
