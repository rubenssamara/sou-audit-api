<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    // Protected & create connection
    protected $connection = 'mysql_sa';

    // Protected table name
    protected $table = 'courses';

    // Protected fillable or inserts
    protected $fillable = [
        'id',
        'identity_type_id',
        'issuing_entity_id',
        'date_issued',
        'description',
        'number',
        'series_number',
        'state_issued',
        'zone',
        'section',
    ];

    // Protected define order
    protected $sorted = [
        'id',
        'identity_type_id',
        'issuing_entity_id',
        'date_issued',
        'description',
        'number',
        'series_number',
        'state_issued',
        'zone',
        'section',
    ];

    // Protected guard
    protected $guarded = [
        'id',
        'identity_type_id',
        'issuing_entity_id',
        'date_issued',
        'description',
        'number',
        'series_number',
        'state_issued',
        'zone',
        'section',
    ];

    // Protected hidden fields
    protected $hidden = [ 
        'id',
        'created_at', 
        'update_at'
    ];

    // Relationships
}
