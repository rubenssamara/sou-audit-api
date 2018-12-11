<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Exports\AuditCourseExport;
use Excel;
use Carbon\Carbon;
class AuditCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $data['course'] = array(
            array(
                'id' => '1',
                'course_name' => 'Administração',
                'class_description' => '1 semestre',
                'institution_name' => 'USP',
                'class_period' => '4 anos'
            ),
            array(
                'id' => '2',
                'course_name' => 'Engenharia Cívil',
                'class_description' => '1 semestre',
                'institution_name' => 'UNICAMP',
                'class_period' => '5 anos'
            ),
            array(
                'id' => '3',
                'course_name' => 'Ciências Contábeis',
                'class_description' => '1 semestre',
                'institution_name' => 'UNESP',
                'class_period' => '4 anos'
            )
        );

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->course_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['course'] = array(
            array(
                'id' => '1',
                'course_name' => 'Administração',
                'class_description' => '1 semestre',
                'institution_name' => 'USP',
                'class_period' => '4 anos'
            ),
            array(
                'id' => '2',
                'course_name' => 'Engenharia Cívil',
                'class_description' => '1 semestre',
                'institution_name' => 'UNICAMP',
                'class_period' => '5 anos'
            ),
            array(
                'id' => '3',
                'course_name' => 'Ciências Contábeis',
                'class_description' => '1 semestre',
                'institution_name' => 'UNESP',
                'class_period' => '4 anos'
            )
        );

        $course = [];

        foreach ($data['course'] as $c) {

            if ($c['id'] == $id) {
                $course = $c;
                break;
            }
        }

        return response()->json($course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('Atualizando o curso com o ID igual a: ' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd('Removendo o curso com o ID igual a: ' . $id);
    }

    public function getCourseOrInstitution($filter)
    {
        $data['course'] = array(
            array(
                'id' => '1',
                'course_name' => 'Administração',
                'institution_name' => 'USP'
            ),
            array(
                'id' => '2',
                'course_name' => 'Engenharia Cívil',
                'institution_name' => 'UNICAMP'
            ),
            array(
                'id' => '3',
                'course_name' => 'Ciências Contábeis',
                'institution_name' => 'UrgencyDeadline'
            )
        );

        $course = [];

        foreach ($data['course'] as $c) {

            if ($c['course_name'] == $filter || $c['institution_name'] == $filter) {
                $course = $c;
                break;
            }
        }

        return response()->json($course);
    }

    public function Legislation()
    {
        $data['legislation'] = array(
            array(
                'id' => '1',
                'course_name' => 'Administração',
                'class_description' => '1 semestre',
                'institution_name' => 'USP',
                'class_period' => '4 anos',
                'rule' => 'sfksfkjlhdjkghdkfhgkjfhdgkjhdfkjghjksdahgjkdhsagjkhsjklhakjlshgdjksdfhgjkhsdfgjkhdfjkhfdgjkdfgjkhdfgfjdkh'
            ),
            array(
                'id' => '2',
                'course_name' => 'Engenharia Cívil',
                'class_description' => '1 semestre',
                'institution_name' => 'UNICAMP',
                'class_period' => '5 anos',
                'rule' => 'sfksfkjlhdjkghdkfhgkjfhdgkjhdfkjghjksdahgjkdhsagjkhsjklhakjlshgdjksdfhgjkhsdfgjkhdfjkhfdgjkdfgjkhdfgfjdkh'
            ),
            array(
                'id' => '3',
                'course_name' => 'Ciências Contábeis',
                'class_description' => '1 semestre',
                'institution_name' => 'UNESP',
                'class_period' => '4 anos',
                'rule' => 'sfksfkjlhdjkghdkfhgkjfhdgkjhdfkjghjksdahgjkdhsagjkhsjklhakjlshgdjksdfhgjkhsdfgjkhdfjkhfdgjkdfgjkhdfgfjdkh'
            )
        );

        return response()->json($data);
    }

    public function UrgencyDeadline()
    {
        $urgency = array(
            array(
                'name' => 'Ana Maria Ferreira',
                'ra' => '132456789',
                'institution_name' => 'Santos',
                'init_date' => '2018.1',
                'end_date' => '2018.4'
            ),
            array(
                'name' => 'Augusto Cavalcante',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2017.1',
                'end_date' => '2017.5'
            ),
            array(
                'name' => 'Cláudia Cardoso',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2018.2',
                'end_date' => '2018.8'
            ),
            array(
                'name' => 'Gilberto Mendes de Sá',
                'ra' => '132456789',
                'institution_name' => 'Bom Jesus dos Perdões',
                'init_date' => '2018.1',
                'end_date' => '2018.1'
            ),
            array(
                'name' => 'Gustavo Roberto Lima',
                'ra' => '132456789',
                'institution_name' => 'Espírito Santo do Pinhal',
                'init_date' => '2019.2',
                'end_date' => '2019.11'
            ),
            array(
                'name' => 'Selina Rodrigues',
                'ra' => '132456789',
                'institution_name' => 'Itaquaquecetuba',
                'init_date' => '2018.1',
                'end_date' => '2018.2'
            )
        );

        return response()->json($urgency);
    }

    public function EnabledStudents()
    {
        $students = array(
            array(
                'name' => 'Ana Maria Ferreira dos Santos Brandão Vieira',
                'ra' => '132456789',
                'institution_name' => 'Santos',
                'init_date' => '2018.1',
                'end_date' => '2018.4'
            ),
            array(
                'name' => 'Augusto Cavalcante',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2017.1',
                'end_date' => '2017.5'
            ),
            array(
                'name' => 'Cláudia Cardoso',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2018.2',
                'end_date' => '2018.8'
            ),
            array(
                'name' => 'Gilberto Mendes de Sá',
                'ra' => '132456789',
                'institution_name' => 'Bom Jesus dos Perdões',
                'init_date' => '2018.1',
                'end_date' => '2018.1'
            ),
            array(
                'name' => 'Gustavo Roberto Lima',
                'ra' => '132456789',
                'institution_name' => 'Espírito Santo do Pinhal',
                'init_date' => '2019.2',
                'end_date' => '2019.11'
            ),
            array(
                'name' => 'Selina Rodrigues',
                'ra' => '132456789',
                'institution_name' => 'Itaquaquecetuba',
                'init_date' => '2018.1',
                'end_date' => '2018.2'
            )
        );

        return response()->json($students);
    }

    public function ReportPdf()
    {
        ini_set('max_execution_time', 0);
        set_time_limit(0);
        $urgencies = array(
            array(
                'name' => 'Ana Maria Ferreira dos Santos Brandão Vieira',
                'ra' => '132456789',
                'institution_name' => 'Santos',
                'init_date' => '2018.1',
                'end_date' => '2018.4'
            ),
            array(
                'name' => 'Augusto Cavalcante',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2017.1',
                'end_date' => '2017.5'
            ),
            array(
                'name' => 'Cláudia Cardoso',
                'ra' => '132456789',
                'institution_name' => 'Piracicaba',
                'init_date' => '2018.2',
                'end_date' => '2018.8'
            ),
            array(
                'name' => 'Gilberto Mendes de Sá',
                'ra' => '132456789',
                'institution_name' => 'Bom Jesus dos Perdões',
                'init_date' => '2018.1',
                'end_date' => '2018.1'
            ),
            array(
                'name' => 'Gustavo Roberto Lima',
                'ra' => '132456789',
                'institution_name' => 'Espírito Santo do Pinhal',
                'init_date' => '2019.2',
                'end_date' => '2019.11'
            ),
            array(
                'name' => 'Selina Rodrigues',
                'ra' => '132456789',
                'institution_name' => 'Itaquaquecetuba',
                'init_date' => '2018.1',
                'end_date' => '2018.2'
            )
        );

        $pdf = PDF::loadView('pdf.pdf', ['urgencies' => $urgencies])->setPaper('a4', 'landscape');
<<<<<<< HEAD:app/Http/Controllers/CourseController.php

        //return $pdf->download('Title PDF - '.Carbon::now()->format('H:i:s d-m-Y').'.pdf');
        return $pdf->download('pdf.pdf');

=======
                
        return $pdf->download('Auditoria_urgentes - '.Carbon::now()->format('H:i:s d-m-Y').'.pdf');
>>>>>>> upstream/devel:app/Http/Controllers/AuditCourseController.php
    }

    public function ReportExcel()
    {   
        return Excel::download(new AuditCourseExport, 'AUDITORIA.xlsx');
    }

    public function AuditStatus()
    {
        $audit_status = [
            [
                'name' => 'João Silva Junior',
                'ra' => '132456789',
                'institution_name' => 'Santos',
                'init_date' => '2018.1',
                'end_date' => '2018.4',
                'assigned_date' => '12/09/2018'
            ],
            [
                'name' => 'Ana Maria Ferreira dos Santos Brandão Vieira',
                'ra' => '132456789',
                'institution_name' => 'Santos',
                'init_date' => '2018.1',
                'end_date' => '2018.4',
                'assigned_date' => '12/09/2018'
            ],
            [
                'name' => 'Rogério Ceni',
                'ra' => '132456789',
                'institution_name' => 'São Vicente',
                'init_date' => '2018.3',
                'end_date' => '2018.10',
                'assigned_date' => '15/11/2018'
            ]
        ];

        return response()->json($audit_status);
    }
}
