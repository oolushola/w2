<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kat_company_profiles', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('company_name');
            $table->string('email_one');
            $table->string('email_two');
            $table->string('phone_no_one');
            $table->string('phone_no_two');
            $table->text('address');
            $table->string('facebook');
            $table->string('linkdin');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('logo');
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
        Schema::dropIfExists('tbl_kat_company_profiles');
    }
}
