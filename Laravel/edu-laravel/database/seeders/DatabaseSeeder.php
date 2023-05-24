<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder; // 호출할 seeder use

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 초기 데이터 삽입용 seeder 호출
        $this->call(CategorySeeder::class);

        // 더미 데이터 삽입용 factory 호출
        $cnt = 0;
        while ($cnt < 5) {
            \App\Models\Board::factory(10000)->create();
            $cnt++;
        }
        // * 반복문 돌리면 5만건 들어갈 수 있음.
    }
}
