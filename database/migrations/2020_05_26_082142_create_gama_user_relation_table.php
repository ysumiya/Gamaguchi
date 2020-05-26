<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamaUserRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gama_user_relations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('gama_id');
            $table->boolean('auth_flag');
            $table->timestamp('auth_request_date')->nullable();
            $table->timestamp('auth_comfirmed_date')->nullable();
            $table->boolean('owner_flag');
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
        Schema::dropIfExists('gama_user_relation');
    }
}
