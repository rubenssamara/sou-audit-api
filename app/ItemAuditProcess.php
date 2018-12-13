<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemAuditProcess extends Model
{
    // Protected table name
    protected $table = 'item_audit_processes';

    // Protected fillable or inserts
    protected $fillable = [
        'field_name',
        'before',
        'after',
        'inconsistency',
        'audit_process_id',
        'location_record',
    ];

    // Protected define order
    protected $sorted = [
        'field_name',
        'before',
        'after',
        'inconsistency',
        'audit_process_id',
        'location_record',
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

    // Relationships
    public function auditProcess()
    {
        return $this->belongsTo(AuditProcess::class);
    }
}
