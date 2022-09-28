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
        Schema::create('latests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('date_publication');
            $table->string('url')->nullable();
            $table->integer('status')->default(1);
            $table->string('path');

            // $table->unsignedBigInteger('photo_id');
            // $table->foreign('photo_id')->references('id')->on('photos');

            $table->unsignedBigInteger('type_id')->default(1);
            $table->foreign('type_id')->references('id')->on('typelatest');


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
        Schema::dropIfExists('latests');
    }
};
