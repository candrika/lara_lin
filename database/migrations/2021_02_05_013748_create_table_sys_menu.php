<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSysMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sys_menu', function (Blueprint $table) {
            $table->increments('sys_menu_id');
            $table->char('sys_menu_name',200);
            $table->char('sys_link_menu',200);
            $table->integer('parent_id');
            $table->smallinteger('deleted');
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
        Schema::dropIfExists('table_sys_menu');
    }
}
