<?php

namespace App\Exports;

use App\AuditCourse;
use Maatwebsite\Excel\Concerns\FromCollection;

class AuditCourseExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        $course = new AuditCourse();
        
        return AuditCourse::all();
    }
}
