<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 東京都の駅のみ。
        // JR線一覧https://www.homes.co.jp/chintai/tokyo/line/　
        //         https://www.homes.co.jp/chintai/tokyo/train-map/  参考
        // 山手線
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '神田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '秋葉原',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '御徒町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '上野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '鶯谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '日暮里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '西日暮里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '田端',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '駒込',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '巣鴨',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '大塚',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '池袋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '目白',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '高田馬場',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '新大久保',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '代々木',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '原宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '渋谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '恵比寿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '目黒',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '五反田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '大崎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '品川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '高輪ゲートウェイ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '田町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '浜松町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '新橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        DB::table('stations')->insert([
                'railroad_id' => '1',
                'station_name' => '有楽町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 京浜東北・根岸線
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '東十条',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '上中里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '田端',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '西日暮里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '日暮里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '鶯谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '上野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '御徒町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '秋葉原',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '神田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '有楽町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '新橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '浜松町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '田町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '高輪ゲートウェイ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '品川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '大井町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '大森',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '2',
                'station_name' => '蒲田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        
        // 中央線
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '神田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '御茶ノ水',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '水道橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '飯田橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '市ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '四ツ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '信濃町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '千駄ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '代々木',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '大久保',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '東中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '高円寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '阿佐ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '西荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '吉祥寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '三鷹',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '武蔵境',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '東小金井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '武蔵小金井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '国分寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '西国分寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '国立',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '日野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '豊田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '西八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '3',
                'station_name' => '高尾',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        
        // 総武線
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '小岩',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '新小岩',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '平井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '亀戸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '錦糸町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '両国',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '浅草橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '秋葉原',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '御茶ノ水',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '水道橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '飯田橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '市ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '四ツ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '信濃町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '千駄ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '代々木',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '大久保',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '東中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '高円寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '阿佐ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '西荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '吉祥寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '4',
                'station_name' => '三鷹',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 東海道本線
        DB::table('stations')->insert([
                'railroad_id' => '5',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '5',
                'station_name' => '新橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '5',
                'station_name' => '品川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 常磐線
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '品川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '新橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '上野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '日暮里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '三河島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '南千住',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '北千住',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '綾瀬',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '亀有',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '6',
                'station_name' => '金町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 横浜線
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '成瀬',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '町田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '相原',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '八王子みなみ野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '片倉',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '7',
                'station_name' => '八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 埼京線
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '大崎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '恵比寿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '渋谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '池袋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '板橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '十条',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '北赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '8',
                'station_name' => '浮間舟渡',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 南武線
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '矢野口',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '稲城長沼',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '南多摩',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '府中本町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '分倍河原',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '西府',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '谷保',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '矢川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '西国立',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '9',
                'station_name' => '立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 横須賀線
        DB::table('stations')->insert([
                'railroad_id' => '10',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '10',
                'station_name' => '新橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '10',
                'station_name' => '品川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '10',
                'station_name' => '西大井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 武蔵野線
        DB::table('stations')->insert([
                'railroad_id' => '11',
                'station_name' => '府中本町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '11',
                'station_name' => '北府中',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '11',
                'station_name' => '西国分寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '11',
                'station_name' => '新小平',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '11',
                'station_name' => '新秋津',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 高崎線
        DB::table('stations')->insert([
                'railroad_id' => '12',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '12',
                'station_name' => '上野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '12',
                'station_name' => '尾久',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '12',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 京葉線
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '八丁堀',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '越中島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '潮見',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '新木場',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '13',
                'station_name' => '葛西臨海公園',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 東北本線
        DB::table('stations')->insert([
                'railroad_id' => '14',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '14',
                'station_name' => '上野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '14',
                'station_name' => '尾久',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '14',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 中央本線
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '東京',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '神田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '御茶ノ水',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '水道橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '飯田橋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '市ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '四ツ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '信濃町',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '千駄ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '代々木',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '大久保',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '東中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '中野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '高円寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '阿佐ヶ谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '西荻窪',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '吉祥寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '三鷹',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '武蔵境',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '東小金井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '武蔵小金井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '国分寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '西国分寺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '国立',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '日野',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '豊田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '西八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '15',
                'station_name' => '高尾',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 青梅線
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '西立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '東中神',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '中神',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '昭島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '拝島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '牛浜',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '福生',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '羽村',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '小作',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '河辺',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '東青梅',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '青梅',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '宮ノ平',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '日向和田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '石神前',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '二俣尾',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '軍畑',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '沢井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '御嶽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '川井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '古里',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '鳩ノ巣',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '白丸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '16',
                'station_name' => '奥多摩',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 八高線
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '北八王子',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '小宮',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '拝島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '東福生',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '17',
                'station_name' => '箱根ヶ崎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 五日市線
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '西立川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '東中神',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '中神',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '昭島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '拝島',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '熊川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '東秋留',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '秋川',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '武蔵引田',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '武蔵増戸',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '18',
                'station_name' => '武蔵五日市',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 湘南新宿ライン宇須
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '池袋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '渋谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '恵比寿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '大崎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '19',
                'station_name' => '西大井',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        
        // 湘南新宿ライン高海
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '赤羽',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '池袋',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '新宿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '渋谷',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '恵比寿',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('stations')->insert([
                'railroad_id' => '20',
                'station_name' => '大崎',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
