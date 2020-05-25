<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ccards', function (Blueprint $table) {
            $table->id();
            $table->string("number");
            $table->string("limit_year_str");
            $table->integer("limit_year_int");
            $table->string("limit_month_str");
            $table->integer("limit_month_int");
            $table->bigInteger("user_id");
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
        Schema::dropIfExists('ccards');
    }
}
