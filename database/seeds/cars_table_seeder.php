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
            ['id' => 1, 'no_plat' => 'N1234GH', 'merk' => 'Camry', 'color' => 'Hitam',  'type' => 'Sedan', 'foto' => 'https://4.bp.blogspot.com/-UclYBB7rTn8/VwVdTt46FKI/AAAAAAAAAiU/5DqAqA4KR7g3LNm3npfkAnhVgOcuS-Rqw/s1600/new-toyota-camry.jpg', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'no_plat' => 'N1235JI', 'merk' => 'Yaris', 'color' => 'Orange',  'type' => 'Hatchback','foto' => 'https://2.bp.blogspot.com/-cZvHWPGnyAQ/VwiUXB47lYI/AAAAAAAAAj4/OjZPPmVx4nMD42YRG0-CrDQ0ufMtC88tw/s1600/all-new-toyota-yaris.jpg', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'no_plat' => 'N4568HI', 'merk' => 'Alphard', 'color' => 'Putih',  'type' => 'MPV','foto' => 'https://4.bp.blogspot.com/-weVmTvOFF-M/VwjYzTGrf4I/AAAAAAAAApU/y7OiWLz1PBsKNdM9m20I-v46w-tr3Di7Q/s1600/all-new-toyota-alphard.jpg', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'no_plat' => 'N3457B', 'merk' => 'Fortuner', 'color' => 'Coklat',  'type' => 'SUV','foto' => 'https://2.bp.blogspot.com/-tWEVeLW7a2M/VxV0vInJ6oI/AAAAAAAAA2M/Eby58659G04LC98D3VJJ8r73j18HsJZ4gCLcB/s1600/all-new-toyota-fortuner.jpg', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'no_plat' => 'B2349S', 'merk' => 'Camry Hybrid', 'color' => 'Silver',  'type' => 'Hybrid', 'foto' => 'https://2.bp.blogspot.com/-T-4CmXiLzxM/VyFcC-jsfuI/AAAAAAAABKA/pr4PFEqcvNw1K0srMzaDVkGtP6Jut9KcQCLcB/s1600/new-toyota-camry-hybrid.jpg','created_at' => \Carbon\Carbon::now()],

        ];

        // insert batch
        DB::table('cars')->insert($cars);
    }
} 