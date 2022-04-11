<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class sign_inController extends Controller {

    public function auth(Request $userData) {

        // response processing
        function resp ($status, $message, $token=null) {

            if(isset($token)) {
                return response()->json([
                    'status' => $status,
                    'message' => $message,
                    'access_token' => $token
                ]);

            } else {
                return response()->json([
                    'status' => $status,
                    'message' => $message
                ]);
            }
        }

        $validator = Validator::make($userData->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors());
        }
        
        $student = Student::where('email', '=', $userData->email)->first();
        $admin = Admin::where('email', '=', $userData->email)->first();

        // validation of the type of user trying to login
        if(isset($student->id)) {
            $user = $student;

        } else if (isset($admin->id)){
            $user = $admin;

        } else {
            return resp(false, 'Favor de verificar usuario');
        }


        // password validation and token return
        if(Hash::check($userData->password, $user->password)) {
            $token = $user->createToken('auth_token')->plainTextToken;
            return resp(true, 'Usuario logueado exitosamente', $token);

        } else { 
            return resp(false, 'Contraseña incorrecta');
        }
    }

    public function profile() {
        return response()->json([
            'status' => true,
            'message' => 'Datos procesados correctamente',
            'data' => auth()->user()
        ]);

    }

    public function logout() {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'Cierre de sesión exitoso',
        ]);
    }
}
