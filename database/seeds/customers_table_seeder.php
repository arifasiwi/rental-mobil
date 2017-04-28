<?php

use Illuminate\Database\Seeder;

class customers_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('customers')->truncate();

        $customers = [
['id' => 1,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],     
['id' => 2,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],            
['id' => 3,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 4,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 5,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()],           
['id' => 6,    'name' => 'paijem',     'users_id' => '1',     'ktp' => '123456789',     'phone' => '081638358973',        'address' => 'malang',   'created_at' => \Carbon\Carbon::now()], 
     ];

        // insert batch
        DB::table('customers')->insert($customers);
    }
} 