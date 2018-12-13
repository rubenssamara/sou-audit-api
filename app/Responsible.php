<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
    // Protected table name
    protected $table = 'responsibles';

    // Protected fillable or inserts
    protected $fillable = [
        'audit_process_id',
        'user_id',
    ];

    // Protected define order
    protected $sorted = [
        'audit_process_id',
        'user_id',
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
