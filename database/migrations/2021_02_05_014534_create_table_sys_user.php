<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSysUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_sys_user', function (Blueprint $table) {
            $table->increments('sys_user_id');
            $table->char('username',150);
            $table->char('password',150);
            $table->char('realname',150);
            $table->longText('jwt_token_encry');
            $table->longText('reset_jwt_token');
            $table->smallInteger('deleted');
            $table->integer('sys_group_id');
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
        Schema::dropIfExists('table_sys_user');
    }
}
