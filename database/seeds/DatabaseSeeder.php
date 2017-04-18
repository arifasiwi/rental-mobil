<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(drivers_table_seeder::class);
        $this->call(cars_table_seeder::class);
        $this->call(users_table_seeder::class);
        $this->call(employees_table_seeder::class);
        $this->call(transactions_table_seeder::class);
    }
}
