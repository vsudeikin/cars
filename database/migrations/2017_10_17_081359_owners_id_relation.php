<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OwnersIdRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('cars', function (Blueprint $table) {
            $table->integer('owner_id')->unsigned()->after('color')->nullable();
            $table->foreign('owner_id')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['owners_id']);
            $table->dropColumn('owners_id');
        });
    }
}
