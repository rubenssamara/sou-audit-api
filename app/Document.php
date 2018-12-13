<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
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
