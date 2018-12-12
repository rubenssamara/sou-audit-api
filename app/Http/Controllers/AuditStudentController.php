<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use Carbon\Carbon;

class AuditStudentController extends Controller
{   
    //lista aluno
    public function show()
    {   
        $data['aluno'] = array(
            array(
                'id' => '1',
                'name' => 'a',
                'polo' => 'santos',
                'RA' => '123456q',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
            ),
              array(
                'id' => '2',
                'name' => 'Sahush',
                'RA' => '123236q',
                'polo' => 'china',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ),
             array(
                'id' => '3',
                'name' => 'Sanh',
                'RA' => '123556q',
                'polo' => 'japão',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ),
            array(
                'id' => '4',
                'name' => 'Shush',
                'RA' => '123456q',
                'polo' => 'venus',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ), 
            array(
                'id' => '5',
                'name' => 'sandra',
                'RA' => '16656q',
                'polo' => 'marte',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            )
        );
        return response()->json($data);
    }
    //pesquisa alunos
    public function StudentResearch($filter){
        
        $data['aluno'] = array(
            array(
                'id' => '1',
                'name' => 'a',
                'polo' => 'santos',
                'RA' => '123456q',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'RA'=>'123456',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
                'tel 2' =>  '41511232',
            ),
              array(
                'id' => '2',
                'name' => 'Sahush',
                'RA' => '123236q',
                'polo' => 'china',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ),
             array(
                'id' => '3',
                'name' => 'Sanh',
                'RA' => '123556q',
                'polo' => 'japão',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ),
            array(
                'id' => '4',
                'name' => 'Shush',
                'RA' => '123456q',
                'polo' => 'venus',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            ), 
            array(
                'id' => '5',
                'name' => 'sandra',
                'RA' => '16656q',
                'polo' => 'marte',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09'
            )
        );

        $student = [];
        foreach ($data['aluno'] as $value) {

            if($value['name'] == $filter || $value['polo'] == $filter) {
                $student = $value;
                break;
            }
        }
        return response()->json($student);
    }

    public function ReportPdf() 
    {
        ini_set('max_execution_time', 0);
        set_time_limit(0);
        $data['student'] = array(
            array(
                'id' => '1',
                'name' => 'lucas emanuel de castro',
                'polo' => 'santos',
                'RA' => '123456q',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
            ),
              array(
                'id' => '2',
                'name' => 'Sahush',
                'RA' => '123236q',
                'polo' => 'china',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
                'tel 2' =>  '41511232',
            ),
             array(
                'id' => '3',
                'name' => 'Sanh',
                'RA' => '123556q',
                'polo' => 'japão',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
                'tel 2' =>  '41511232',
            ),
            array(
                'id' => '4',
                'name' => 'Shush',
                'RA' => '123456q',
                'polo' => 'venus',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
                'tel 2' =>  '41511232',
            ), 
            array(
                'id' => '5',
                'name' => 'sandra',
                'RA' => '16656q',
                'polo' => 'marte',
                'Semestre_inicio' => '2017.01',
                'Semestre_saida' => '2017.09',
                'curso' => 'matematica avançada',
                'rg' => '123456',
                'ingresso' =>'123456',
                'Email-pessoal' => '123@teste.com',
                'Email-institucional' => '123@teste.com',
                'tel 1' => '41511232',
                'tel 2' =>  '41511232',
            )
        );
        
        $pdf = PDF::loadView('pdf.StudentPdf', ['data' => $data['student']])->setPaper('a4', 'landscape');
        return $pdf->download('pdf.StudentPdf.pdf');
               
    }
    // Alunos rejeitados
    public function RetainedStudent(){
        return['status' => true];
    }
    //pesquisa alunos rejeitados    
    public function RetainedStudentList($id)
    {
        return['status' => true,
                'id' => $id
            ];
    //rotas de Relatorios
    }public function RejectedReportPdf() 
    {
        return['status' => 'Criando rotas relatório pdf para alunos rejeitados'];
    }

}
