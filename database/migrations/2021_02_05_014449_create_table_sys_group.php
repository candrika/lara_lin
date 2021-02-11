<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSysGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sys_group', function (Blueprint $table) {
            $table->increments('sys_group_id');
            $table->char('sys_group_name',100);
            $table->smallInteger('status')->default($value=1);
            $table->smallInteger('deleted')->defalut($value=0);
            $table->tinyInteger('view')->defalut($value=1);
            $table->tinyInteger('create')->defalut($value=1);
            $table->tinyInteger('update')->defalut($value=1);
            $table->tinyInteger('delete')->defalut($value=1);
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
        Schema::dropIfExists('table_sys_group');
    }
}
