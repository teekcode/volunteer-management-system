<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity')->unsigned();//参与的活动
            $table->integer('person')->unsigned();//参与人员id
            $table->dateTime('confirm_time');//织放方确认参加
            $table->dateTime('reject_time');//组织方否认参加
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
        Schema::drop('personal_record');
    }
}
