<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->table('documents', function (Blueprint $table) {
            $table->integer('audit_process_id')->unsigned();
            $table->foreign('audit_process_id')->references('id')->on('audit_processes')->onDelete('cascade');
            $table->integer('document_type_id')->unsigned();
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('cascade');
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
        Schema::connection('mysql')->table('documents', function (Blueprint $table) {
            $table->dropForeign('documents_audit_process_id_foreign');
            $table->dropColumn('audit_process_id');
            $table->dropForeign('documents_document_type_id_foreign');
            $table->dropColumn('document_type_id');
        });
    }
}
