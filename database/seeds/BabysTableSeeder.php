<?php

use Illuminate\Database\Seeder;

class BabysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // テーブルのクリア
    DB::table('babys')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $babys = [
              ['name' => 'hinata',
               'birthday' => 20181003],
              ['name' => 'kotona',
               'birthday' => 20190501]
             ];
        // 登録
        foreach($babys as $baby) {
        \App\Baby::create($baby);
        }
    }
}
