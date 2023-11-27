<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('locations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('post_id');
        $table->double('latitude');
        $table->double('longitude');
        $table->timestamps();

        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('locations');
}

};
