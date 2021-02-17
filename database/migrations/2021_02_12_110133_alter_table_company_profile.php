<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableCompanyProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_kat_company_profiles', function (Blueprint $table) {
            $table->text('our_history')->after('logo');
            $table->text('our_mission')->after('our_history');
            $table->text('our_vision')->after('our_mission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_kat_company_profiles', function (Blueprint $table) {
            $table->dropColumn([
                'our_history',
                'our_mission',
                'our_vision'
            ]);
        });
    }
}
