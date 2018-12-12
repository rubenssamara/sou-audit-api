<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipAuditCoursesStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_courses_students', function (Blueprint $table) {
            $table->integer('audit_course_id')->unsigned();
            $table->foreign('audit_course_id')->references('id')->on('audit_courses');
            $table->integer('audit_student_id')->unsigned();
            $table->foreign('audit_student_id')->references('id')->on('audit_students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->create('audit_courses_students', function (Blueprint $table) {
            $table->dropForeign('audit_courses_students_audit_course_id_foreign');
            $table->dropColumn('audit_course_id');
            $table->dropForeign('audit_courses_students_audit_student_id_foreign');
            $table->dropColumn('audit_student_id');
        });
    }
}
