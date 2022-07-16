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
        Schema::create('favor__granteds', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();

            $table->foreignId('favor_peding_id')
                ->references('id')
                ->on('favor__pendings')
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
        Schema::dropIfExists('favor__granteds');
    }
};
