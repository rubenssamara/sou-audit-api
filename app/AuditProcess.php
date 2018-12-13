<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditProcess extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'audit_processes';

    // Protected fillable or inserts
    protected $fillable = [
        'student_id',
        'user_id',
        'attributed_date',
        'audit_type_id',
        'accept_law',
        'status',
        'internship',
        'commitment_term',
        'activity_plan',
        'process_number',
        'ppi',
        'public_school', 
    ];

    // Protected define order
    protected $sorted = [
        'student_id',
        'user_id',
        'attributed_date',
        'audit_type_id',
        'accept_law',
        'status',
        'internship',
        'commitment_term',
        'activity_plan',
        'process_number',
        'ppi',
        'public_school', 
    ];

    // Protected guard
    protected $guarded = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Protected hidden fields
    protected $hidden = [
        'id', 
        'created_at', 
        'update_at'
    ];
}
