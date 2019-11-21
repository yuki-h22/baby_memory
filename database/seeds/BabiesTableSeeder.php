<?php

use Illuminate\Database\Seeder;

class BabiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             // BooksTableSeederを読み込むように指定
     $this->call(BabiesTableSeeder::class);
    
          // テーブルのクリア
    DB::table('babies')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $babies = [
              ['name' => 'hinata',
               'birthday' => 20181003],
              ['name' => 'kotona',
               'birthday' => 20190501]
             ];
        // 登録
        foreach($babies as $baby) {
        \App\Baby::create($baby);
        }
    }
}
