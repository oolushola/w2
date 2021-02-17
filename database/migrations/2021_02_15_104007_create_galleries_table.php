<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kat_galleries', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->enum('image_for', [1, 2])->nullable();
            $table->string('headline')->nullable();
            $table->text('caption')->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('tbl_kat_galleries');
    }
}
