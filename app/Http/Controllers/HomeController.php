<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('home')->with(compact('user'));
    }

    public function formulario()
    {
        return view('formularios');
    }

    public function documentos()
    {
        return view('documents');
    }

    public function comprobante()
    {
        return view('comprobante');
    }

    public function subirSoportes(Request $request)
    {
        if($request->hasFile("tarjeta_identificacion")){
            $user = User::find(Auth::user()->id);
            $user->tarjeta_identificacion = $request->file('tarjeta_identificacion')->store('public');
            $user->foto = $request->file('foto')->store('public');
            $user->save();

            return redirect()->route('home');
        
        }
    }

    public function subirFormularios(Request $request)
    {
        if($request->hasFile("servicios_especiales")){
            $user = User::find(Auth::user()->id);
            $user->servicios_especiales = $request->file('servicios_especiales')->store('public');
            $user->formato_registro = $request->file('formato_registro')->store('public');
            $user->save();

            return redirect()->route('home');
        
        }
    }

    public function subirComprobante(Request $request)
    {
        if($request->hasFile("comprobante_pago")){
            $user = User::find(Auth::user()->id);
            $user->comprobante_pago = $request->file('comprobante_pago')->store('public');
            $user->save();

            return redirect()->route('home');
        
        }
    }

}
