<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditStudent extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'audit_students';

    // Protected fillable or inserts
    protected $fillable = [
        'id', 
        'address_em_flag',
        'birth_date_flag',
        'born_city_flag',
        'cep_em_flag',
        'certified_reserve_flag',
        'city_em_flag',
        'close_semesteryear_flag',
        'close_mouthyear_flag',
        'cpf_flag',
        'district_em_flag',
        'father_name_flag',
        'elector_title_flag',
        'emitter_state_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'ingress_mouthyear_year_flag',
        'ingress_semesteryear_flag',
        'institutional_email_flag',
        'mother_name_flag',
        'name_flag',
        'nationality_flag',
        'regulation_flag',
        'rg_flag',
        'social_name_flag',
        'state_em_flag',
        'student_id',
        'user_id'
    ];

    // Protected define order
    protected $sorted = [
        'id', 
        'address_em_flag',
        'birth_date_flag',
        'born_city_flag',
        'cep_em_flag',
        'certified_reserve_flag',
        'city_em_flag',
        'close_semesteryear_flag',
        'close_mouthyear_flag',
        'cpf_flag',
        'district_em_flag',
        'father_name_flag',
        'elector_title_flag',
        'emitter_state_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'ingress_mouthyear_year_flag',
        'ingress_semesteryear_flag',
        'institutional_email_flag',
        'mother_name_flag',
        'name_flag',
        'nationality_flag',
        'regulation_flag',
        'rg_flag',
        'social_name_flag',
        'state_em_flag',
        'student_id',
        'user_id'
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'address_em_flag',
        'birth_date_flag',
        'born_city_flag',
        'cep_em_flag',
        'certified_reserve_flag',
        'city_em_flag',
        'close_semesteryear_flag',
        'close_mouthyear_flag',
        'cpf_flag',
        'district_em_flag',
        'father_name_flag',
        'elector_title_flag',
        'emitter_state_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'ingress_mouthyear_year_flag',
        'ingress_semesteryear_flag',
        'institutional_email_flag',
        'mother_name_flag',
        'name_flag',
        'nationality_flag',
        'regulation_flag',
        'rg_flag',
        'social_name_flag',
        'state_em_flag',
        'student_id',
        'user_id'
    ];

    // Protected hidden fields
    protected $hidden = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Relationships
    public function auditCourses()
    {
        return $this->belongsToMany(AuditCourse::class, 'audit_courses_students')->withTimestamps();
    }

    public function auditDocuments()
    {
        return $this->belongsToMany(AuditDocument::class, 'audit_students_documents')->withTimestamps();
    }

    public function auditStudentsUsers()
    {
        return $this->hasMany(AuditStudentUser::class);
    }

}
