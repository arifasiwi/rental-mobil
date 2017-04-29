<?php

use Illuminate\Database\Seeder;

class cars_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('cars')->truncate();

        $cars = [
            ['id' => 1, 'no_plat' => 'N1234GH', 'merk' => 'A', 'color' => 'merah',  'type' => 'T', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'no_plat' => 'N1235JI', 'merk' => 'B', 'color' => 'biru',  'type' => 'U', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'no_plat' => 'N4568HI', 'merk' => 'C', 'color' => 'putih',  'type' => 'X', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'no_plat' => 'N3457B', 'merk' => 'D', 'color' => 'hitam',  'type' => 'K', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'no_plat' => 'B2349S', 'merk' => 'E', 'color' => 'kuning',  'type' => 'W', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'no_plat' => 'AG1352N', 'merk' => 'F', 'color' => 'pink',  'type' => 'I', 'created_at' => \Carbon\Carbon::now()],
        ];

        // insert batch
        DB::table('cars')->insert($cars);
    }
} 