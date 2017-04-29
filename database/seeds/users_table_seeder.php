<?php

use Illuminate\Database\Seeder;

class users_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

// truncate record

        DB::table('users')->truncate();


        $users = [

            ['id' => 1, 'name' => 'paijem', 'email' => 'arifasiwi@gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 2, 'name' => 'paijem', 'email' => 'milanda@gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 3, 'name' => 'paijem', 'email' => 'arifas@gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 4, 'name' => 'paijem', 'email' => 'arifasiw:gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 5, 'name' => 'paijem', 'email' => 'arisiwi@gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 6, 'name' => 'paijem', 'email' => 'asiwi@gmail.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => 'aappaa', 'created_at' => \Carbon\Carbon::now()],
            ['id' => 7, 'name' => 'Administrator', 'email' => 'administrator@rental.com', 'ktp' => '123456789', 'phone' => '081638358973', 'address' => 'malang', 'level' => '0', 'password' => bcrypt('qwerty'), 'created_at' => \Carbon\Carbon::now()],

        ];


// insert batch

        DB::table('users')->insert($users);

    }

} 