<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class sign_upController extends Controller {

    public function create(Request $userData) {

        if($userData->type == 'student') {

            $validator = Validator::make($userData->all(), [
                'name' => 'required|string|max:100',
                'surname' => 'required|string|max:100',
                'email' => 'required|string|email|max:10|unique:students',
                'password' => 'required|confirmed|max:255',
                'career' => 'required|string|max:100'
            ]);

            if($validator->fails()) {
                return response()->json($validator->errors());
            }

            $student = new Student();

            $student->name = $userData->name; 
            $student->surname = $userData->surname; 
            $student->email = $userData->email; 
            $student->password = $userData->password; 
            $student->career = $userData->career; 

            $student->save();
            return $student;


        } else if($userData->type == 'admin') {

            $validator = Validator::make($userData->all(), [
                'name' => 'required',
                'surname' => 'required',
                'email' => 'required|email|unique:students',
                'password' => 'required|confirmed',
            ]);

            if($validator->fails()) {
                return response()->json($validator->errors());
            }

            $admin = new Admin();

            $admin->name = $userData->name; 
            $admin->surname = $userData->surname; 
            $admin->email = $userData->email; 
            $admin->password = $userData->password; 

            $admin->save();
            return $admin;


        } else {
            return response()->json([
                'status' => false,
                'message' => 'Favor de validar tipo de usuario'
            ]);
        }        

        return response()->json([
            'status' => true,
            'message' => 'Registro de usuario exitoso'
        ]);
    }
}
