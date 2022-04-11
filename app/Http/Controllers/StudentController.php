<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function student() {

    }

    public function list() {
        $students = Student::all();

        if(empty($students)) {
            return response()->json([
                'status' => false,
                'message' => 'No se tienen estudiantes registrados',
            ]);
        } else {
            try {
                return response()->json([
                    'status' => true,
                    'message' => 'Listado de estudiantes procesado correctamente',
                    'data' => $students
                ]);
                
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => true,
                    'message' => 'Error al intentar consultar listado de estudiantes',
                    'error' => $th
                ]);
            }
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
