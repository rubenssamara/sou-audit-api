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
            $table->boolean('address_em_flag');
            $table->boolean('birth_date_flag');
            $table->boolean('born_city_flag');
            $table->boolean('cep_em_flag');
            $table->boolean('certified_reserve_flag');
            $table->boolean('city_em_flag');
            $table->boolean('close_semesteryear_flag');
            $table->boolean('close_mouthyear_flag');
            $table->boolean('cpf_flag');
            $table->boolean('district_em_flag');
            $table->boolean('father_name_flag');
            $table->boolean('elector_title_flag');
            $table->boolean('emitter_state_flag');
            $table->boolean('end_date_em_flag');
            $table->boolean('end_school_name_flag');
            $table->boolean('ingress_mouthyear_year_flag');
            $table->boolean('ingress_semesteryear_flag');
            $table->boolean('institutional_email_flag');
            $table->boolean('mother_name_flag');
            $table->boolean('name_flag');
            $table->boolean('nationality_flag');
            $table->boolean('regulation_flag');
            $table->boolean('rg_flag');
            $table->boolean('social_name_flag');
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
