<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Colegiado;
use App\Models\Pago;
use App\Models\User;
use App\Models\Oficina;

class TipoTramiteController extends Controller
{
    public function show($id){
        $users = User::findOrFail($id);
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        return view('tramites.oficinas', compact('pagos','colegiados','users','tramites'));
    }
}
