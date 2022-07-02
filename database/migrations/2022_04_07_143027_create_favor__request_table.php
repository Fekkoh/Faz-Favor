<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('favor__requests', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
            $table->string('description');
            $table->date('date');
            $table->time('hour');
            $table->boolean('finished');
            $table->timestamps();

            $table->foreignId('user_request_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict');

            $table->foreignId('area_id')
                  ->references('id')
                  ->on('areas')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favor__requests');
    }
};
