<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditResponsible extends Model
{
    // Protected table name
    protected $table = 'audit_responsibles';

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

    // Relationships
    public function auditProcess()
    {
        return $this->belongsTo(AuditProcess::class);
    }
}
