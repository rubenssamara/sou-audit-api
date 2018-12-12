<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditStudentLog extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'audit_students_user';

    // Protected fillable or inserts
    protected $fillable = [
        'id', 
        'column',
        'last_value',
        'user_id',
        'audit_student_id',
    ];

    // Protected define order
    protected $sorted = [
        'id', 
        'column',
        'last_value',
        'user_id',
        'audit_student_id',
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'column',
        'last_value',
        'user_id',
        'audit_student_id',
    ];

    // Protected hidden fields
    protected $hidden = [ 
        'id',
        'created_at',
        'update_at,' 
    ];

    // Relationships
    public function auditStudent()
    {
        return $this->belongsTo(AuditStudent::class);
    }
}
