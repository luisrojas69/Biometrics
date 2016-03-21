<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubFacRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subfacrels', function (Blueprint $table) {
            $table->string('code');
            $table->string('fid',9);
            $table->timestamps();

            $table->foreign('code')->references('code')->on('subjects');
            $table->foreign('fid')->references('fid')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subfacrels');
    }
}
