<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Prefecture;
use App\Models\Company;
use App\Models\Railroad;
use App\Models\Station;
use App\Models\View;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\Cookie;

class SearchController extends Controller
{
    /**
     * 閲覧履歴画面表示
     * @return View 閲覧履歴画面
     */
    public function history()
    {
        $visited_stations = json_decode(Cookie::get('visited_stations', '[]'), true);
        return view('/search/history')->with([
            'visited_stations' => $visited_stations
            ]);
    }

    /**
     * 路線一覧画面表示
     * @param Company $company
     * @return View 路線一覧画面
     */
    public function lists(Company $company)
    {
        return view('/search/railroads_list')->with([
            'companies' => $company->get()
            ]);
    }
    
    /**
     * 路線一覧->駅一覧画面表示
     * @param $railroad_id
     * @return View 駅一覧画面
     */
    public function stations($railroad_id)
    {
        $railroad_name = Railroad::find($railroad_id);
        $station = $railroad_name->stations()->get();
        
        return view('/search/stations_list')->with([
            'stations' => $station,
            'railroad_name'=>$railroad_name
            ]);
    }
        
    /**
     * 路線一覧->駅一覧->詳細画面表示
     * @param $railroad_id, $station_id, View $view
     * @return View 詳細画面
     */
    public function detail($railroad_id, $station_id, View $view)
    {
        $station_name = Station::find($station_id);
        $details = Station::find($station_id)->views()->get();
        $railroad_name = Railroad::find($railroad_id);
        
        // cookieに保存する履歴情報を作成
        $history = [
            'railroad_name' => $railroad_name,
            'station_name' => $station_name,
        ];

        // cookieに履歴情報を保存
        $visited_stations = json_decode(Cookie::get('visited_stations', '[]'), true);
        array_unshift($visited_stations, $history);
        Cookie::queue('visited_stations', json_encode($visited_stations), 60);
    
        //お気に入りボタン用
        foreach ($details as $detail) {
                    $view = $detail->id;
        }
        if (Auth::check()) {
            $favorite = Favorite::where('view_id', $view)
                                ->where('user_id', auth()->user()->id)
                                ->first();
        } else {
                $favorite = null;
        }
        
        return view('/search/detail')->with([
            'station_name' => $station_name,
            'railroad_name' => $railroad_name,
            'details' => $details,
            'favorite' => $favorite,
            'view' => $view
            ]);
    }
        
    /**
     * トップ画面->検索結果画面表示
     * @param Request $request
     * @return View 検索結果画面
     */
    public function search(Request $request)
    {
        $input = $request->input('keyword');
        
        $views = View::join('stations', 'stations.id', '=', 'views.station_id')
            ->join('railroads', 'railroads.id', '=', 'views.railroad_id')
            ->Where('stations.station_name', 'like', "%$input%")
            ->orWhere('railroads.railroad_name', 'like', "%$input%")
            ->get();
        
        $companies = Company::join('railroads', 'railroads.company_id', '=', 'companies.id')
            ->where('companies.company_name', 'like', "%$input%")
            ->get();
        
        if (!$input) {
            $message = "検索結果はありません。";
        }
        elseif (count($views) == 0 && count($companies) == 0) {
            $message = "検索結果はありません。";
        }
        elseif (count($views) == 0 || count($companies) == 0) {
            $message = null;
        }
        return view('/search/show')->with([
            'views' => $views,
            'companies' => $companies,
            'input' => $input,
            'message' => $message
            ]);
    }
}
