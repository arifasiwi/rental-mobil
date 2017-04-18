<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employees_id');
            $table->string('cars_id');
            $table->string('users_id');
            $table->string('drivers_id');
            $table->string('destinations');
            $table->date('date_transactions');
            $table->date('date_loans');
            $table->date('date_returns');
            $table->string('tot_payments');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }}
