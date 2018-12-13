<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    // Protected & create connection
    protected $connection = 'mysql';

    // Protected table name
    protected $table = 'documents';

    // Protected fillable or inserts
    protected $fillable = [
        'autenticate',
        'image', // FIXME: Modifies name
        'audit_process_id',
        'type_document_id',
    ];

    // Protected define order
    protected $sorted = [
        'autenticate',
        'image', // FIXME: Modifies name
        'audit_process_id',
        'type_document_id',
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
