<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipItemAuditProcesses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->table('item_audit_processes', function (Blueprint $table) {
            $table->integer('audit_process_id')->unsigned();
            $table->foreign('audit_process_id')->references('id')->on('audit_processes')->onDelete('cascade');
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
        Schema::connection('mysql')->table('item_audit_processes', function (Blueprint $table) {
            $table->dropForeign('item_audit_processes_audit_process_id_foreign');
            $table->dropColumn('audit_process_id');
        });
    }
}
