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
        Schema::create('favor__pendings', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();

            $table->foreignId('favor_request_id')
                ->references('id')
                ->on('favor__requests')
                ->onDelete('restrict');

            $table->foreignId('user_offered_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favor__pendings');
    }
};
