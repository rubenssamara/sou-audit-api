<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditStudentUser extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'audit_students_user';

    // Protected fillable or inserts
    protected $fillable = [
        'audit_student_id', 
        'user_id',
        'assignment_flag',

    ];

    // Protected define order
    protected $sorted = [
        'audit_student_id', 
        'user_id', 
        'assignment_flag',
    ];

    // Protected guard
    protected $guarded = [
        'audit_student_id', 
        'user_id', 
        'assignment_flag',
    ];

    // Protected hidden fields
    protected $hidden = [ 
        'created_at', 
        'update_at'
    ];

    // Relationships
    public function auditStudent()
    {
        return $this->belongsTo(AuditStudent::class);
    }
}
