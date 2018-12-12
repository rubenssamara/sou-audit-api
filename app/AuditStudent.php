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
        'user_id',
        'student_id',
        'ingress_mouth_year_flag',
        'ingress_semester_year_flag',
        'close_semester_year_flag',
        'close_mouth_year_flag',
        'regulation_flag',
        'institutional_email_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'address_em_flag',
        'cep_em_flag',
        'district_em_flag',
        'city_em_flag',
        'state_em_flag',
    ];

    // Protected define order
    protected $sorted = [
        'id', 
        'user_id',
        'student_id',
        'ingress_mouth_year_flag',
        'ingress_semester_year_flag',
        'close_semester_year_flag',
        'close_mouth_year_flag',
        'regulation_flag',
        'institutional_email_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'address_em_flag',
        'cep_em_flag',
        'district_em_flag',
        'city_em_flag',
        'state_em_flag',
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'user_id',
        'student_id',
        'ingress_mouth_year_flag',
        'ingress_semester_year_flag',
        'close_semester_year_flag',
        'close_mouth_year_flag',
        'regulation_flag',
        'institutional_email_flag',
        'end_date_em_flag',
        'end_school_name_flag',
        'address_em_flag',
        'cep_em_flag',
        'district_em_flag',
        'city_em_flag',
        'state_em_flag',
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

    public function auditStudentLogs()
    {
        return $this->hasMany(AuditStudentLog::class);
    }

    public function auditStudentsUsers()
    {
        return $this->hasMany(AuditStudentUser::class);
    }

    public function auditIdentities()
    {
        return $this->belongsToMany(AuditIdentity::class, 'audit_students_identities')->withTimestamps();
    }

}
