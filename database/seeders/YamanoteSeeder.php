<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class YamanoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 山手線　JY01東京
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '1',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY01%E5%A4%96%E5%9B%9E%E3%82%8A%E6%9D%B1%E4%BA%AC.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY01%E5%86%85%E5%9B%9E%E3%82%8A%E6%9D%B1%E4%BA%AC.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY02神田
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '2',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY02%E5%A4%96%E5%9B%9E%E3%82%8A%E7%A5%9E%E7%94%B0.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY02%E5%86%85%E5%9B%9E%E3%82%8A%E7%A5%9E%E7%94%B0.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY03秋葉原
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '3',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY03%E5%A4%96%E5%9B%9E%E3%82%8A%E7%A7%8B%E8%91%89%E5%8E%9F.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY03%E5%86%85%E5%9B%9E%E3%82%8A%E7%A7%8B%E8%91%89%E5%8E%9F.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY04御徒町
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '4',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY04%E5%A4%96%E5%9B%9E%E3%82%8A%E5%BE%A1%E5%BE%92%E7%94%BA.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY04%E5%86%85%E5%9B%9E%E3%82%8A%E5%BE%A1%E5%BE%92%E7%94%BA.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY05上野
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '5',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY05%E5%A4%96%E5%9B%9E%E3%82%8A%E4%B8%8A%E9%87%8E.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY05%E5%86%85%E5%9B%9E%E3%82%8A%E4%B8%8A%E9%87%8E.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY06鶯谷
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '6',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY06%E5%A4%96%E5%9B%9E%E3%82%8A%E9%B6%AF%E8%B0%B7.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY06%E5%86%85%E5%9B%9E%E3%82%8A%E9%B6%AF%E8%B0%B7.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY07日暮里
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '7',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY07%E5%A4%96%E5%9B%9E%E3%82%8A%E6%97%A5%E6%9A%AE%E9%87%8C.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY07%E5%86%85%E5%9B%9E%E3%82%8A%E6%97%A5%E6%9A%AE%E9%87%8C.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY08西日暮里
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '8',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY08%E5%A4%96%E5%9B%9E%E3%82%8A%E8%A5%BF%E6%97%A5%E6%9A%AE%E9%87%8C.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY08%E5%86%85%E5%9B%9E%E3%82%8A%E8%A5%BF%E6%97%A5%E6%9A%AE%E9%87%8C.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY09田端
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '9',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY09%E5%A4%96%E5%9B%9E%E3%82%8A%E7%94%B0%E7%AB%AF.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY09%E5%86%85%E5%9B%9E%E3%82%8A%E7%94%B0%E7%AB%AF.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY10駒込
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '10',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY10%E5%A4%96%E5%9B%9E%E3%82%8A%E9%A7%92%E8%BE%BC.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY10%E5%86%85%E5%9B%9E%E3%82%8A%E9%A7%92%E8%BE%BC.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY11巣鴨
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '11',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY11%E5%A4%96%E5%9B%9E%E3%82%8A%E5%B7%A3%E9%B4%A8.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY11%E5%86%85%E5%9B%9E%E3%82%8A%E5%B7%A3%E9%B4%A8.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY12大塚
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '12',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY12%E5%A4%96%E5%9B%9E%E3%82%8A%E5%A4%A7%E5%A1%9A.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY12%E5%86%85%E5%9B%9E%E3%82%8A%E5%A4%A7%E5%A1%9A.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY13池袋
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '13',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY13%E5%A4%96%E5%9B%9E%E3%82%8A%E6%B1%A0%E8%A2%8B.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY13%E5%86%85%E5%9B%9E%E3%82%8A%E6%B1%A0%E8%A2%8B.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY14目白
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '14',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY14%E5%A4%96%E5%9B%9E%E3%82%8A%E7%9B%AE%E7%99%BD.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY14%E5%86%85%E5%9B%9E%E3%82%8A%E7%9B%AE%E7%99%BD.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY15高田馬場
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '15',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY15%E5%A4%96%E5%9B%9E%E3%82%8A%E9%AB%98%E7%94%B0%E9%A6%AC%E5%A0%B4.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY15%E5%86%85%E5%9B%9E%E3%82%8A%E9%AB%98%E7%94%B0%E9%A6%AC%E5%A0%B4.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY16新大久保
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '16',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY16%E5%A4%96%E5%9B%9E%E3%82%8A%E6%96%B0%E5%A4%A7%E4%B9%85%E4%BF%9D.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY16%E5%86%85%E5%9B%9E%E3%82%8A%E6%96%B0%E5%A4%A7%E4%B9%85%E4%BF%9D.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY17新宿
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '17',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY17%E5%A4%96%E5%9B%9E%E3%82%8A%E6%96%B0%E5%AE%BF.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY17%E5%86%85%E5%9B%9E%E3%82%8A%E6%96%B0%E5%AE%BF.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY18代々木
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '18',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY18%E5%A4%96%E5%9B%9E%E3%82%8A%E4%BB%A3%E3%80%85%E6%9C%A8.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY18%E5%86%85%E5%9B%9E%E3%82%8A%E4%BB%A3%E3%80%85%E6%9C%A8.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY19原宿
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '19',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY19%E5%A4%96%E5%9B%9E%E3%82%8A%E5%8E%9F%E5%AE%BF.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY19%E5%A4%96%E5%9B%9E%E3%82%8A%E5%8E%9F%E5%AE%BF.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY20渋谷
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '20',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY20%E5%A4%96%E5%9B%9E%E3%82%8A%E6%B8%8B%E8%B0%B7.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY20%E5%86%85%E5%9B%9E%E3%82%8A%E6%B8%8B%E8%B0%B7.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY21恵比寿
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '21',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY21%E5%A4%96%E5%9B%9E%E3%82%8A%E6%81%B5%E6%AF%94%E5%AF%BF.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY21%E5%86%85%E5%9B%9E%E3%82%8A%E6%81%B5%E6%AF%94%E5%AF%BF.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY22目黒
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '22',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY22%E5%A4%96%E5%9B%9E%E3%82%8A%E7%9B%AE%E9%BB%92.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY22%E5%86%85%E5%9B%9E%E3%82%8A%E7%9B%AE%E9%BB%92.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY23五反田
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '23',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY23%E5%A4%96%E5%9B%9E%E3%82%8A%E4%BA%94%E5%8F%8D%E7%94%B0.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY23%E5%86%85%E5%9B%9E%E3%82%8A%E4%BA%94%E5%8F%8D%E7%94%B0.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY24大崎
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '24',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY24%E5%A4%96%E5%9B%9E%E3%82%8A%E5%A4%A7%E5%B4%8E.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY24%E5%86%85%E5%9B%9E%E3%82%8A%E5%A4%A7%E5%B4%8E.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY25品川
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '25',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY25%E5%A4%96%E5%9B%9E%E3%82%8A%E5%93%81%E5%B7%9D.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY25%E5%86%85%E5%9B%9E%E3%82%8A%E5%93%81%E5%B7%9D.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY26高輪ゲートウェイ
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '26',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY26%E5%A4%96%E5%9B%9E%E3%82%8A%E9%AB%98%E8%BC%AA%E3%82%B1%E3%82%99%E3%83%BC%E3%83%88%E3%82%A6%E3%82%A7%E3%82%A4.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY26%E5%86%85%E5%9B%9E%E3%82%8A%E9%AB%98%E8%BC%AA%E3%82%B1%E3%82%99%E3%83%BC%E3%83%88%E3%82%A6%E3%82%A7%E3%82%A4.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY27田町
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '27',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY27%E5%A4%96%E5%9B%9E%E3%82%8A%E7%94%B0%E7%94%BA.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY27%E5%86%85%E5%9B%9E%E3%82%8A%E7%94%B0%E7%94%BA.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY28浜松町
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '28',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY28%E5%A4%96%E5%9B%9E%E3%82%8A%E6%B5%9C%E6%9D%BE%E7%94%BA.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY28%E5%A4%96%E5%9B%9E%E3%82%8A%E6%B5%9C%E6%9D%BE%E7%94%BA.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY29新橋
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '29',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY29%E5%A4%96%E5%9B%9E%E3%82%8A%E6%96%B0%E6%A9%8B.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY29%E5%86%85%E5%9B%9E%E3%82%8A%E6%96%B0%E6%A9%8B.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
        // 山手線　JY30有楽町
        DB::table('views')->insert([
               'railroad_id' => '1',
               'station_id' => '30',
               'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY30%E5%A4%96%E5%9B%9E%E3%82%8A%E6%9C%89%E6%A5%BD%E7%94%BA.png',
               'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E5%B1%B1%E6%89%8B%E7%B7%9A/%E5%B1%B1%E6%89%8B%E7%B7%9A/JY30%E5%86%85%E5%9B%9E%E3%82%8A%E6%9C%89%E6%A5%BD%E7%94%BA.png',
               'created_at' => new DateTime(),
               'updated_at' => new DateTime(),
         ]);
    }
}
