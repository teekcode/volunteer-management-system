<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('given_time')->unsigned();//提供的志愿时间
            $table->string('organizer');//组织方
            $table->string('describe');//活动介绍
            $table->integer('person_id')->unsigned();//添加活动的人
            $table->dateTime('delete_time');//删除活动时间，注意判断非null
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
        Schema::drop('activities');
    }
}
