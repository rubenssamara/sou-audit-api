<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAuditDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('audit_documents', function (Blueprint $table) {
            $table->integer('audit_process_id')->unsigned();
            $table->foreign('audit_process_id')->references('id')->on('audit_processes');
            $table->integer('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on('document_types');
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
        Schema::table('audit_documents', function (Blueprint $table) {
            $table->dropForeign('audit_documents_audit_process_id_foreign');
            $table->dropColumn('audit_process_id');
            $table->dropForeign('audit_documents_document_type_id_foreign');
            $table->dropColumn('document_type_id');
        });
    }
}
