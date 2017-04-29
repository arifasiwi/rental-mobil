<?php

use Illuminate\Database\Seeder;

class transactions_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    
{
        
// truncate record
        
DB::table('transactions')->truncate();

        
$transactions = [
            
['id' => 1, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()],  
['id' => 2, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()],
['id' => 3, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()],  
['id' => 4, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()],
['id' => 5, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()],
['id' => 6, 'customers_id' => '1', 'cars_id' => '2', 'drivers_id' => '3', 'users_id' => '4', 'destinations' => 'malang', 'date_transactions' => '2017-04-17', 'date_loans' => '2017-04-17', 'date_returns' => '2017-04-17', 'tot_payments' => '1.500.000', 'created_at' => \Carbon\Carbon::now()], 

];

        

// insert batch
        
DB::table('transactions')->insert($transactions);
    
}

}