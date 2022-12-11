<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ViewTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 東京駅
        // 山手線4番5番ホーム
        DB::table('views')->insert([
                'railroad_id' => '1',
                'station_id' => '1',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E5%B1%B1%E6%89%8B%E7%B7%9A4%E7%95%AA%E3%83%9B%E3%83%BC%E3%83%A0.png',
                'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E5%B1%B1%E6%89%8B%E7%B7%9A5%E7%95%AA%E3%83%9B%E3%83%BC%E3%83%A0.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 京浜東北線3番6番ホーム
         DB::table('views')->insert([
                'railroad_id' => '2',
                'station_id' => '42',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E4%BA%AC%E6%B5%9C%E6%9D%B1%E5%8C%97%E7%B7%9A3%E7%95%AA%E3%83%9B%E3%83%BC%E3%83%A0.png',
                'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E4%BA%AC%E6%B5%9C%E6%9D%B1%E5%8C%97%E7%B7%9A6%E7%95%AA%E3%83%9B%E3%83%BC%E3%83%A0.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 中央線1番2番ホーム
         DB::table('views')->insert([
                'railroad_id' => '3',
                'station_id' => '52',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E4%B8%AD%E5%A4%AE%E7%B7%9A1_2%E7%95%AA%E7%B7%9A.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 東海道線9番10番ホーム
         DB::table('views')->insert([
                'railroad_id' => '14',
                'station_id' => '169',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E6%9D%B1%E6%B5%B7%E9%81%93%E7%B7%9A9_10%E7%95%AA%E3%83%9B%E3%83%BC%E3%83%A0.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 常磐線7番8番ホーム
         DB::table('views')->insert([
                'railroad_id' => '6',
                'station_id' => '115',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E6%9D%B1%E4%BA%AC%E9%A7%85/%E5%B8%B8%E7%A3%90%E7%B7%9A7_8%E7%95%AA%E7%B7%9A.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 神田駅
        // 山手線2番3番ホーム
         DB::table('views')->insert([
                'railroad_id' => '1',
                'station_id' => '29',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E7%A5%9E%E7%94%B0%E9%A7%85/%E5%B1%B1%E6%89%8B%E7%B7%9A2%E7%95%AA%E7%B7%9A.png',
                'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E7%A5%9E%E7%94%B0%E9%A7%85/%E5%B1%B1%E6%89%8B%E7%B7%9A3%E7%95%AA%E7%B7%9A.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 京浜東北線1番4番ホーム
         DB::table('views')->insert([
                'railroad_id' => '2',
                'station_id' => '41',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E7%A5%9E%E7%94%B0%E9%A7%85/%E4%BA%AC%E6%B5%9C%E6%9D%B1%E5%8C%97%E7%B7%9A1%E7%95%AA%E7%B7%9A.png',
                'image2' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E7%A5%9E%E7%94%B0%E9%A7%85/%E4%BA%AC%E6%B5%9C%E6%9D%B1%E5%8C%97%E7%B7%9A4%E7%95%AA%E7%B7%9A.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
        // 中央線5番6番ホーム
         DB::table('views')->insert([
                'railroad_id' => '3',
                'station_id' => '53',
                'image1' => 'https://imgbucket-202211152400.s3.amazonaws.com/%E7%A5%9E%E7%94%B0%E9%A7%85/%E4%B8%AD%E5%A4%AE%E7%B7%9A5_6%E7%95%AA%E7%B7%9A.png',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
