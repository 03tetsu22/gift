<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMDraft extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_draft', function (Blueprint $table) {
            $table->increments('id');
            $table->string('draft');
            $table->date('start_at')->nullable();
            $table->date('publish_at')->nullable();
            $table->integer('copy_amount')->nullable();
            $table->integer('now_stock')->nullable();
            $table->date('limit_date')->nullable();
            $table->integer('m_status_id')->nullable();
            $table->integer('charge')->nullable();
            $table->integer('cost')->nullable();
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
        Schema::dropIfExists('m_draft');
    }
}
