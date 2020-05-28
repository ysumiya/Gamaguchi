<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamaLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gama_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('gama_id');
            $table->integer('amount')->default(0);
            $table->boolean('inc_dec_flag');
            $table->string('source')->nullable();
            $table->timestamp("date")->useCurrent();
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
        Schema::dropIfExists('gama_log');
    }
}
