<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event', 100);
            $table->date('date')->nullable();
            $table->string('place', 50)->nullable();
            $table->integer('m_status_id')->nullable();
            $table->integer('budget')->nullable();
            $table->date('limit')->nullable();
            $table->text('memo')->nullable();
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
        Schema::dropIfExists('m_schedule');
    }
}
