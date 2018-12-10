<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditCourse extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'audit_courses';

    // Protected fillable or inserts
    protected $fillable = [
        'id', 
        'activity_plane_flag', 
        'comprimisse_term_flag',
        'course_name_flag',
        'mandatory_intership_flag',
        'medial_global_flag',
        'payload_complished_flag',
        'payload_total_flag',
        'percent_frequency_flag',
        'progress_course_flag',
        'revenue_learn_flag',
        'situation_flag',
        'type_course_flag',
        'course_id'
    ];

    // Protected define order
    protected $sorted = [
        'id', 
        'activity_plane_flag', 
        'comprimisse_term_flag',
        'course_name_flag',
        'mandatory_intership_flag',
        'medial_global_flag',
        'payload_complished_flag',
        'payload_total_flag',
        'percent_frequency_flag',
        'progress_course_flag',
        'revenue_learn_flag',
        'situation_flag',
        'type_course_flag',
        'course_id'
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'activity_plane_flag', 
        'comprimisse_term_flag',
        'course_name_flag',
        'mandatory_intership_flag',
        'medial_global_flag',
        'payload_complished_flag',
        'payload_total_flag',
        'percent_frequency_flag',
        'progress_course_flag',
        'revenue_learn_flag',
        'situation_flag',
        'type_course_flag',
        'course_id'
    ];

    // Protected hidden fields
    protected $hidden = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Relationships
    public function auditStudents()
    {
        return $this->belongsToMany(AuditStudent::class, 'audit_courses_students')->withTimestamps();
    }
}
