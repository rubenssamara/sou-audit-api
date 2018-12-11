<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Protected & create connection
    protected $connection = 'mysql_sa';

    // Protected table name
    protected $table = 'courses';

    // Protected fillable or inserts
    protected $fillable = [
        'id',
        'name',
        'duration_semesters',
        'course_type',
    ];

    // Protected define order
    protected $sorted = [
        'id',
        'name',
        'duration_semesters',
        'course_type',
    ];

    // Protected guard
    protected $guarded = [
        'id',
        'name',
        'duration_semesters',
        'course_type',
    ];

    // Protected hidden fields
    protected $hidden = [ 
        'id',
        'created_at', 
        'update_at'
    ];

    // Relationships
}
