<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend', function (Blueprint $table) {
            $table->id();
            $table->string('judul',255);
            $table->string('content',255);
            $table->string('link',255);
            $table->string('icon',255);
            $table->string('gambar',255);
            $table->string('section',255);
            $table->timestamps();
        });


        // content, link, icon, gambar
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontend');
    }
}
