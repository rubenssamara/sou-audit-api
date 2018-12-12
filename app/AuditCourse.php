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
        'course_id',
        'course_name_flag',
        'type_course_flag',
        'payload_total_flag',
        'payload_complished_flag',
        'progress_course_flag',
        'medial_global_flag',
        'revenue_learn_flag',
        'percent_frequency_flag',
        'situation_flag',
        'mandatory_intership_flag',
        'comprimisse_term_flag',
        'activity_plane_flag', 
    ];

    // Protected define order
    protected $sorted = [
        'id', 
        'course_id',
        'course_name_flag',
        'type_course_flag',
        'payload_total_flag',
        'payload_complished_flag',
        'progress_course_flag',
        'medial_global_flag',
        'revenue_learn_flag',
        'percent_frequency_flag',
        'situation_flag',
        'mandatory_intership_flag',
        'comprimisse_term_flag',
        'activity_plane_flag', 
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'course_id',
        'course_name_flag',
        'type_course_flag',
        'payload_total_flag',
        'payload_complished_flag',
        'progress_course_flag',
        'medial_global_flag',
        'revenue_learn_flag',
        'percent_frequency_flag',
        'situation_flag',
        'mandatory_intership_flag',
        'comprimisse_term_flag',
        'activity_plane_flag', 
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
