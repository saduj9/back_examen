<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Division;
use App\Models\SubDivision;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DivisionCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contador=Division::join('divisionsuperior','division.divisionsup_id','=','divisionsuperior.id')
        ->join('subdivision','subdivision.division_id', '=','division.id')
        ->select('division.*','divisionsuperior.nombre_divisionsup')->selectRaw('COUNT(subdivision.nombre_subdivision) as subdivisiones')
        ->where('division.estado','A')
        ->groupBy('division.id','division.nombre_division','division.colaboradores','division.nivel','division.embajador','division.descripcion','division.divisionsup_id','division.estado','division.created_at','division.updated_at','divisionsuperior.nombre_divisionsup');
        
      
        $division=Division::select('division.*','divisionsuperior.nombre_divisionsup')->selectRaw('0 as subdivisiones')
        ->join('divisionsuperior','division.divisionsup_id','=','divisionsuperior.id')
        ->where('division.estado','A')->union($contador)->get() ;
        return $division;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $division = new Division();
        $division->nombre_division = $request->nombre_division;
        $division->colaboradores = $request->colaboradores;
        $division->nivel = $request->nivel;
        $division->embajador = $request->embajador;
        $division->descripcion = $request->descripcion;
        $division->divisionsup_id = $request->divisionsup_id;
        $division->estado = 'A';
        $division->created_at = Carbon::now();
        $division->updated_at = Carbon::now();

        $division->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $division = Division::find($id);
       return $division;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $division = Division::findOrFail($request->id);
        $division->nombre_division = $request->nombre_division;
        $division->colaboradores = $request->colaboradores;
        $division->nivel = $request->nivel;
        $division->embajador = $request->embajador;
        $division->descripcion = $request->descripcion;
        $division->divisionsup_id = $request->divisionsup_id;
        $division->estado = $request->estado;
        $division->updated_at = Carbon::now();

        $division->save();
        return $division;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::destroy($id);
        return $division;
    }
}
