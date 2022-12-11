<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime; 

class LineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // JR線一覧https://www.homes.co.jp/chintai/tokyo/line/参考
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '山手線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '京浜東北・根岸線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '中央線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '総武線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '東海道本線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '常磐線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '横浜線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '埼京線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '南武線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '横須賀線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '武蔵野線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '高崎線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '京葉線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '東北本線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '中央本線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '青梅線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '八高線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '五日市線',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '湘南新宿ライン宇須',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
        DB::table('railroads')->insert([
                'company_id' => '1',
                'railroad_name' => '湘南新宿ライン高海',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
