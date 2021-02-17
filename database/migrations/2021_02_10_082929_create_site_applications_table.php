<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kat_site_applications', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('application_name');
            $table->string('url_path');
            $table->boolean('menu_link')->default(false);
            $table->boolean('footer_link')->default(false);
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
        Schema::dropIfExists('tbl_kat_site_applications');
    }
}
