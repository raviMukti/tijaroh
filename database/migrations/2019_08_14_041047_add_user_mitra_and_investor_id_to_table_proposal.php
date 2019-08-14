<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserMitraAndInvestorIdToTableProposal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proposal', function($table){
            $table->integer('user_mitra_id');
            $table->integer('user_investor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposal', function($table){
            $table->dropColumn('user_mitra_id');
            $table->dropColumn('user_investor_id');
        });
    }
}
