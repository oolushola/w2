<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kat_child_links', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('site_application_id')->unsigned();
            $table->string('application_name');
            $table->string('url_path');
            $table->boolean('make_active')->default(false);
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
        Schema::dropIfExists('tbl_kat_child_links');
    }
}
