<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Protected & create connection
    protected $connection = 'mysql_sa';

    // Protected table name
    protected $table = 'courses';

    // Protected fillable or inserts
    protected $fillable = [
        'id',
        'class_id',
        'ethnicity_id',
        'marital_status_id',
        'country_id',
        'address_id',
        'city_id',
        'name',
        'last_name',
        'cpf',
        'academic_register',
        'birth_date',
        'flag_on',
        'blood_type',
        'organ_donor',
        'assumed_name',
        'gender',
        'students_type',
        'current_status',
        'flag_pwd',
        'flag_blindness',
        'flag_vision_impairment',
        'flag_deafness',
        'flag_hearing',
        'flag_physical_disability',
        'flag_deafblindness',
        'flag_multiple',
        'flag_intellectual',
        'flag_autism',
        'flag_asperger',
        'flag_rett',
        'flag_childhood_disintegrative_disease',
        'flag_giftedness',
    ];

    // Protected define order
    protected $sorted = [
        'id',
        'class_id',
        'ethnicity_id',
        'marital_status_id',
        'country_id',
        'address_id',
        'city_id',
        'name',
        'last_name',
        'cpf',
        'academic_register',
        'birth_date',
        'flag_on',
        'blood_type',
        'organ_donor',
        'assumed_name',
        'gender',
        'students_type',
        'current_status',
        'flag_pwd',
        'flag_blindness',
        'flag_vision_impairment',
        'flag_deafness',
        'flag_hearing',
        'flag_physical_disability',
        'flag_deafblindness',
        'flag_multiple',
        'flag_intellectual',
        'flag_autism',
        'flag_asperger',
        'flag_rett',
        'flag_childhood_disintegrative_disease',
        'flag_giftedness',
    ];

    // Protected guard
    protected $guarded = [
        'id',
        'class_id',
        'ethnicity_id',
        'marital_status_id',
        'country_id',
        'address_id',
        'city_id',
        'name',
        'last_name',
        'cpf',
        'academic_register',
        'birth_date',
        'flag_on',
        'blood_type',
        'organ_donor',
        'assumed_name',
        'gender',
        'students_type',
        'current_status',
        'flag_pwd',
        'flag_blindness',
        'flag_vision_impairment',
        'flag_deafness',
        'flag_hearing',
        'flag_physical_disability',
        'flag_deafblindness',
        'flag_multiple',
        'flag_intellectual',
        'flag_autism',
        'flag_asperger',
        'flag_rett',
        'flag_childhood_disintegrative_disease',
        'flag_giftedness',
    ];

    // Protected hidden fields
    protected $hidden = [ 
        'id',
        'created_at', 
        'update_at'
    ];

    // Relationships
}
