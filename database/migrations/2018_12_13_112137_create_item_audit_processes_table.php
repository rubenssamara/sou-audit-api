<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemAuditProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_audit_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('field_name', 50)->nullable();
            $table->string('before', 255)->nullable();
            $table->string('after', 255)->nullable();
            $table->tinyInteger('inconsistency')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_audit_processes');
    }
}
