<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_identities', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('transfer_pole_flag');
            $table->string('pole_description_in', 60);
            $table->string('pole_description_out', 60);
            $table->integer('semester');
            $table->integer('year');
            $table->boolean('ppi_flag');
            $table->boolean('pole_enchiridion');
            $table->boolean('company_enchiridion');
            $table->boolean('other_enchiridion');
            $table->string('description_other_enchiridion', 250);
            $table->boolean('rg_audit_pole_flag');
            $table->boolean('rg_audit_registry_flag');
            $table->boolean('rg_audit_no_flag');
            $table->boolean('hist_audit_pole_flag');
            $table->boolean('hist_audit_registry_flag');
            $table->boolean('hist_audit_no_flag');
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
        Schema::dropIfExists('audit_identities');
    }
}
