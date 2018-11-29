<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog',function (Blueprint $table){
            $table->bigIncrements('id')->comment('id');
            $table->string('title',100)->comment('标题');
            $table->string('user',50)->comment('用户名');
            $table->date('time')->comment('时间');
            $table->longText('medium')->comment('简介');
            $table->longText('content')->comment('内容');
            $table->string('image',255)->comment('图片');
            $table->bigInteger('fabulous')->comment('点赞');
            $table->string('comment',255)->comment('评论');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blog');        
    }
}
