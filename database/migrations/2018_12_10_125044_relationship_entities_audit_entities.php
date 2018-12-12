<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipEntitiesAuditEntities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->table('audit_entities', function (Blueprint $table) {
            $table->integer('entity_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('sou_authentication.entities');
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
            $table->dropForeign('audit_entities_entity_id_foreign');
            $table->dropColumn('entity_id');
        });
    }
}
