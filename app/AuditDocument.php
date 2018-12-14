<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditDocument extends Model
{
    // Protected table name
    protected $table = 'audit_documents';

    // Protected fillable or inserts
    protected $fillable = [
        'autenticate',
        'attachment',
        'audit_process_id',
        'type_document_id',
    ];

    // Protected define order
    protected $sorted = [
        'autenticate',
        'attachment',
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

    // Relationships
    public function auditProcess()
    {
        return $this->belongsTo(AuditProcess::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
