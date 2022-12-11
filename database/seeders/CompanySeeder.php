<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; 

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 東京都の鉄道会社一覧https://www.navitime.co.jp/railroad/companylist?aCode=13参考
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => 'JR東日本',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => 'ゆりかもめ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '京王電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '京成電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '京浜急行電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '小田急電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '西武鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '多摩都市モノレール',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東京地下鉄(メトロ)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東京モノレール',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東急電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東京都交通局',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東京臨海高速鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '東武鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '北総鉄道/京成電鉄(成田空港線)',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '埼玉高速鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '首都圏新都市鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '御岳登山鉄道',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('companies')->insert([
                'prefecture_id' => '13',
                'company_name' => '高尾登山電鉄',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
