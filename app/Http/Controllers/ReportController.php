<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Http\Request;

class ReportController extends Controller {

    public function list() {
        $reports = Report::all();

        if(empty($reports)) {
            return response()->json([
                'status' => false,
                'message' => 'No se tienen reportes registrados',
            ]);
        } else {
            try {
                return response()->json([
                    'status' => true,
                    'message' => 'Listado de reportes consultado correctamente',
                    'data' => $reports
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar listado de reportes',
                    'error' => $th
                ]);
            }
        }
    }

    public function show(Request $reportData) {


        // function getJsonLength($jsonData) {
        //     $length = 0;

        //     foreach ($jsonData as $key => $json) {
        //         $length++;
        //     }
        //     return $length;
        // }
        
        // return getJsonLength($reportData);

        // consulting a report, by its id; or consulting several reports according to the student's id
        if(empty($reportData)) {

        } else if(isset($reportData->id)) {
            try {
                $report = Report::find($reportData->id);
                if($report) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Consulta de reporte exitosa',
                        'data' => $report
                    ]);
                } else {
                    return response()->json([
                        'status' => true,
                        'message' => 'Reporte inexistente',
                    ]);
                }
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar reporte',
                    'error' => $th
                ]);
            }

        } else if($reportData->student_id) {
            try {
                $reports = Report::where('student_id', $reportData->student_id)->get();
                return response()->json([
                    'status' => true,
                    'message' => 'Consulta de reportes de estudiantes exitosa',
                    'data' => $reports
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => 'Error al intentar consultar reportes de estudiante',
                    'error' => $th
                ]);
            }
        } else {
            return response()->json([
                // validate that the validation of the empty json and the json with only one data type is working, as well as that the names of the fields passed are as they should be
                'status' => false,
                'message' => 'Favor de validar el tipo de consulta a realizar: id o student_id',
            ]);

        }
    }
    
    public function create(Request $reportData) {

        try {
            $user = auth()->user();
            $report = new Report();

            $report->student_id = $user->id; 
            $report->description = $reportData->description; 
            $report->image = $reportData->image; 
            $report->status = $reportData->status; 
            $report->save();
            
            return response()->json([
                'status' => true,
                'message' => 'Reporte creado exitosamente',
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'Error al intentar crear el reporte',
                'error' => $th
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReportRequest $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReportRequest  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
