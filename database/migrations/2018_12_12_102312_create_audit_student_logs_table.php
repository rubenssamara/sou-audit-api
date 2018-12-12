<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditStudentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_student_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('audit_student_id')->unsigned();
            $table->foreign('audit_student_id')->references('id')->on('audit_students');
            $table->integer('user_id');
            $table->string('last_value', 150);
            $table->string('column', 40);
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
        Schema::connection('mysql')->create('audit_student_logs', function (Blueprint $table) {
            $table->dropForeign('audit_student_logs_audit_student_id_foreign');
            $table->dropColumn('audit_student_id');
        });
    }
}
