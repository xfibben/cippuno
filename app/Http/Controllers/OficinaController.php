<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;

class OficinaController extends Controller
{
    public function create(){
        return view('tramites.creacionoficina');
    }
    public function store(Request $request){
        $oficina = Oficina::create($request->all());
    }

}
