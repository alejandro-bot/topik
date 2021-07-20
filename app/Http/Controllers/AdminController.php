<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {

        $users = User::all();
        $cantidad = User::all()->count();
        $comprobantes = User::all()->count();
        $formularios = User::all()->count();
        $documentos = User::all()->count();
        
        return view('admin.home', compact('users', 'cantidad', 'comprobantes', 'formularios', 'documentos'));
    }
}
