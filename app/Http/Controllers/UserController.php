<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::select([
            'users.id as id',
            'users.name as name',
            'users.email as email',
            'users.fecha_nacimiento as fecha_nacimiento',
            'user_domicilio.domicilio as domicilio',
            'user_domicilio.numero_exterior as numero_exterior',
            'user_domicilio.colonia as colonia',
            'user_domicilio.cp as cp',
            'user_domicilio.ciudad as ciudad',
            DB::raw('TIMESTAMPDIFF(YEAR,users.fecha_nacimiento,CURDATE()) as edad')])
        ->join('user_domicilio', 'user_id', 'users.id')
        ->get();
        
        
        return response()->json($users, 200);
    }
}
