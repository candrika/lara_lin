<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSaldo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_saldo', function (Blueprint $table) {
            $table->increments('saldo_id');
            $table->decimal('pemasukan',$precition=12,$scalar=2);
            $table->decimal('pengeluaran',$precition=12,$scalar=2);
            $table->char('saldo_description',100);
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
        Schema::dropIfExists('table_saldo');
    }
}
