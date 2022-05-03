<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
                    INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
                    (1, 'Chống Thấm', null),
                    (2, 'Chống thấm sàn', 1),
                    (3, 'Chống thấm tường', 1),
                    (4, 'Sửa chữa', 1),
                    (5, 'Keo dán gạch, Miết mạch', null),
                    (6, 'Keo dán gạch', 5),
                    (7, 'Keo miết mạch', 5),
                    (8, 'Keo dán đa năng', 5),
                    (9, 'Tấm cách âm, cách nhiệt', null),
                    (10, 'Tấm cách âm', 9),
                    (11, 'Tấm cách nhiệt ', 9),
                    (12, 'Silicon', null),
                    (13, 'Silicon', 12),
                    (14, 'Các vật liệu phụ trợ', null),
                    (15, 'Các vật liệu phụ trợ', 14);"
        );
    }
}
