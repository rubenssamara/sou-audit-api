<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipIndetitiesAuditIndetities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->table('audit_identities', function (Blueprint $table) {
            $table->integer('indetity_id')->unsigned();
            $table->foreign('indetity_id')->references('id')->on('sou_authentication.indetities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->table('audit_students', function (Blueprint $table) {
            $table->dropForeign('audit_identities_indetity_id_foreign');
            $table->dropColumn('indetity_id');
        });
    }
}
