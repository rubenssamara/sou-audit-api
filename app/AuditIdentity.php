<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditIdentity extends Model
{
     // Protected & create connection
     protected $connection = 'mysql';

     // Protected table name
     protected $table = 'audit_identities';
 
     // Protected fillable or inserts
     protected $fillable = [
        'id', 
        'company_enchiridion',
        'description_other_enchiridion',
        'rg_audit_no_flag',
        'rg_audit_pole_flag',
        'rg_audit_registry_flag',
        'hist_audit_no_flag',
        'hist_audit_pole_flag',
        'hist_audit_registry_flag',
        'other_enchiridion',
        'pole_enchiridion',
        'pole_in_flag',
        'pole_out_flag',
        'ppi_flag',
        'semester',
        'transfer_pole_flag',
        'year',
        'identity_id'
     ];
 
     // Protected define order
     protected $sorted = [
        'id', 
        'company_enchiridion',
        'description_other_enchiridion',
        'rg_audit_no_flag',
        'rg_audit_pole_flag',
        'rg_audit_registry_flag',
        'hist_audit_no_flag',
        'hist_audit_pole_flag',
        'hist_audit_registry_flag',
        'other_enchiridion',
        'pole_enchiridion',
        'pole_in_flag',
        'pole_out_flag',
        'ppi_flag',
        'semester',
        'transfer_pole_flag',
        'year',
        'identity_id'
     ];
 
     // Protected guard
     protected $guarded = [
        'id', 
        'company_enchiridion',
        'description_other_enchiridion',
        'rg_audit_no_flag',
        'rg_audit_pole_flag',
        'rg_audit_registry_flag',
        'hist_audit_no_flag',
        'hist_audit_pole_flag',
        'hist_audit_registry_flag',
        'other_enchiridion',
        'pole_enchiridion',
        'pole_in_flag',
        'pole_out_flag',
        'ppi_flag',
        'semester',
        'transfer_pole_flag',
        'year',
        'identity_id'
     ];
 
     // Protected hidden fields
     protected $hidden = [
        'id', 
        'created_at', 
        'update_at'
    ];

    // Relationships
    public function auditStudents()
    {
        return $this->belongsToMany(AuditStudent::class, 'audit_students_identities')->withTimestamps();
    }
}
