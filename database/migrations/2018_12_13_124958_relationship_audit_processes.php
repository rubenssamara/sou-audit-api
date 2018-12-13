<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAuditProcesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->table('audit_processes', function (Blueprint $table) {
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('sou_authentication.students')->onDelete('cascade');
            $table->integer('audit_type_id')->unsigned();
            $table->foreign('audit_type_id')->references('id')->on('audit_types')->onDelete('cascade');
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
        Schema::connection('mysql')->table('audit_processes', function (Blueprint $table) {
            $table->dropForeign('audit_processes_audit_type_id_foreign');
            $table->dropColumn('audit_type_id');
        });
    }
}
