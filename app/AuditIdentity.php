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
         'identity_id',
         'transfer_pole_flag',
         'pole_description_in',
         'pole_description_out',
         'semester',
         'year',
         'ppi_flag',
         'pole_enchiridion',
         'company_enchiridion',
         'other_enchiridion',
         'description_other_enchiridion',
         'rg_audit_pole_flag',
         'rg_audit_registry_flag',
         'rg_audit_no_flag',
         'hist_audit_pole_flag',
         'hist_audit_registry_flag',
         'hist_audit_no_flag',
     ];
 
     // Protected define order
     protected $sorted = [
         'id', 
         'identity_id',
         'transfer_pole_flag',
         'pole_description_in',
         'pole_description_out',
         'semester',
         'year',
         'ppi_flag',
         'pole_enchiridion',
         'company_enchiridion',
         'other_enchiridion',
         'description_other_enchiridion',
         'rg_audit_pole_flag',
         'rg_audit_registry_flag',
         'rg_audit_no_flag',
         'hist_audit_pole_flag',
         'hist_audit_registry_flag',
         'hist_audit_no_flag',
     ];
 
     // Protected guard
     protected $guarded = [
         'id', 
         'identity_id',
         'transfer_pole_flag',
         'pole_description_in',
         'pole_description_out',
         'semester',
         'year',
         'ppi_flag',
         'pole_enchiridion',
         'company_enchiridion',
         'other_enchiridion',
         'description_other_enchiridion',
         'rg_audit_pole_flag',
         'rg_audit_registry_flag',
         'rg_audit_no_flag',
         'hist_audit_pole_flag',
         'hist_audit_registry_flag',
         'hist_audit_no_flag',
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
