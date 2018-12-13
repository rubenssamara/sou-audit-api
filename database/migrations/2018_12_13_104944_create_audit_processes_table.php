<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->dateTime('attributed_date')->nullable();
            $table->tinyInteger('accept_law');
            $table->string('status', 45)->nullable();
            $table->tinyInteger('internship')->nullable();
            $table->tinyInteger('commitment_term')->nullable();
            $table->tinyInteger('activity_plan')->nullable();
            $table->char('process_number', 50)->nullable();
            $table->tinyInteger('ppi')->nullable();
            $table->tinyInteger('public_school')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('audit_processes');
    }
}
