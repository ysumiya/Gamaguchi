<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateGamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gamas', function (Blueprint $table) {
            $table->id();
            $table->string("gama_name");
            $table->integer("sum")->default(0);
            $table->string("icon_path")->nullable();
            $table->boolean("active_flag")->default(True);
            $table->timestamp('regist_date')->useCurrent();
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
        //
    }
}
