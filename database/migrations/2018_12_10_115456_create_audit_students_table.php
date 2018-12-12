<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('audit_students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean('ingress_mouth_year_flag');
            $table->boolean('ingress_semester_year_flag');
            $table->boolean('close_semester_year_flag');
            $table->boolean('close_mouth_year_flag');
            $table->boolean('regulation_flag');
            $table->boolean('institutional_email_flag');
            $table->boolean('end_date_em_flag');
            $table->boolean('end_school_name_flag');
            $table->boolean('address_em_flag');
            $table->boolean('cep_em_flag');
            $table->boolean('district_em_flag');
            $table->boolean('city_em_flag');
            $table->boolean('state_em_flag');
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
        Schema::connection('mysql')->dropIfExists('audit_students');
    }
}
