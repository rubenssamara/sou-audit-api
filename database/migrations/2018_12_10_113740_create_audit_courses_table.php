<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activity_plane_flag');
            $table->boolean('comprimisse_term_flag');
            $table->boolean('course_name_flag');
            $table->boolean('mandatory_intership_flag');
            $table->boolean('medial_global_flag');
            $table->boolean('payload_complished_flag');
            $table->boolean('payload_total_flag');
            $table->boolean('percent_frequency_flag');
            $table->boolean('progress_course_flag');
            $table->boolean('revenue_learn_flag');
            $table->boolean('situation_flag');
            $table->boolean('type_course_flag');
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
        Schema::connection('mysql')->dropIfExists('audit_courses');
    }
}
