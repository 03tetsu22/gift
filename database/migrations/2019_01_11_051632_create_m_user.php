<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('pen_name', 100)->nullable();
            $table->string('account', 100);
            $table->string('password');
            $table->rememberToken();
            $table->integer('grade')->nullable();
            $table->string('undergraduate', 50)->nullable();
            $table->string('department', 50)->nullable();
            $table->integer('position')->nullable();
            $table->string('job', 50)->nullable();
            $table->integer('student_flg')->nullable();
            $table->integer('indign_flg')->nullable();
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
        Schema::dropIfExists('m_user');
    }
}
