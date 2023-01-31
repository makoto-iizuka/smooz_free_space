<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // 都道府県追加
        $this->call(PrefSeeder::class);
        
        // 鉄道会社名追加
        $this->call(CompanySeeder::class);
        
        // 線路名(JR)追加
        $this->call(LineSeeder::class);
        
        // 駅名(JR)追加
        $this->call(StationSeeder::class);
        
        // サンプル画像追加
        $this->call(ViewTestSeeder::class);
        
        // 山手線全駅画像追加
        $this->call(YamanoteSeeder::class);
    }
}
