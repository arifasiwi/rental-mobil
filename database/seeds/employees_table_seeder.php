<?php

use Illuminate\Database\Seeder;

class employees_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('employees')->truncate();

        $employees = [
['id' => 1,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],     
['id' => 2,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],            
['id' => 3,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 4,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 5,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 6,    'name' => 'paijem',     'gender' => 'gfkjh',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()], 
     ];

        // insert batch
        DB::table('employees')->insert($employees);
    }
} 