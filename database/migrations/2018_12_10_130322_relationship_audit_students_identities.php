<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAuditStudentsIdentities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_students_identities', function (Blueprint $table) {
            $table->integer('audit_student_id')->unsigned();
            $table->foreign('audit_student_id')->references('id')->on('audit_students');
            $table->integer('audit_identity_id')->unsigned();
            $table->foreign('audit_identity_id')->references('id')->on('audit_identities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->create('audit_students_identities', function (Blueprint $table) {
            $table->dropForeign('audit_students_identities_audit_student_id_foreign');
            $table->dropColumn('audit_student_id');
            $table->dropForeign('audit_students_identities_audit_identity_id_foreign');
            $table->dropColumn('audit_identity_id');
        });
    }
}
