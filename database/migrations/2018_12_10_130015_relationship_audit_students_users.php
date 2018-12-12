<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAuditStudentsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_students_users', function (Blueprint $table) {
            $table->integer('audit_student_id')->unsigned();
            $table->foreign('audit_student_id')->references('id')->on('audit_students');
            $table->integer('user_id');
            $table->boolean('assignment_flag');
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
        Schema::connection('mysql')->create('audit_students_users', function (Blueprint $table) {
            $table->dropForeign('audit_students_users_audit_student_id_foreign');
            $table->dropColumn('audit_student_id');
        });
    }
}
