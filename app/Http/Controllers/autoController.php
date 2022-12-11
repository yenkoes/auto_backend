<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class autoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table("autos")
        ->leftJoin("motors", "autos.motors_id", "=", "motors.id")
        ->leftJoin("models", "autos.modelis_id", "=", "models.id")
        ->leftJoin("ielas", "autos.iela_id", "=", "ielas.id")
        ->leftJoin("pilsetas", "autos.pilseta_id", "=", "pilsetas.id")
        ->leftJoin("krasas", "autos.krasa_id", "=", "krasas.id")
        ->leftJoin("types", "autos.veids_id", "=", "types.id")
        ->leftJoin("markas", "models.marka_id", "=", "markas.id")
        ->leftJoin("degvielas", "motors.degviela_id", "=", "degvielas.id")
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $num = DB::table("autos")->get("id")->last();
        
        $request->validate([
            'registracijas_nr' => 'required',
            'apliecibas_nr' => 'required',
            'vin' => 'required',
            'tipa_aps_nr' => 'required',
        ]);

        DB::table("autos")->insert([
            "registracijas_nr"=>$request->registracijas_nr, 
            "apliecibas_nr"=>$request->apliecibas_nr, 
            "vin"=>$request->vin,
            "tipa_aps_nr"=>$request->tipa_aps_nr,
            "modelis_id"=>$request->modelis_id,
            "motors_id"=>$request->motors_id,
            "pilseta_id"=>$request->pilseta_id,
            "iela_id"=>$request->iela_id,
            "krasa_id"=>$request->krasa_id,
            "veids_id"=>$request->veids_id,

            "piezimes"=>$request->piezimes]);

        return Auto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Auto::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auto = Auto::find($id);
        $auto->update($request->all());
        return $auto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Auto::destroy($id);
    }
}
