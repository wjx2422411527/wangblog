<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function (Blueprint $table){
            $table->bigIncrements('id')->comment('id'); 
            $table->string('user',100)->comment('用户名');
            $table->string('password',100)->comment('密码');
            $table->char('occupation',100)->comment('职业');
            $table->char('address',255)->comment('地址');
            $table->string('email',100)->comment('电子邮件');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
