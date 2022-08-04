<?php

namespace App\Http\Controllers;

use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Village;
use Illuminate\Http\Request;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clusters = Cluster::all();
        // dd($clusters->first()->filiere->nom);
        return view('cluster.index', ['clusters' => $clusters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $filieres = Filiere::pluck('nom','id');
        $departements = Departement::all();
        // dd($filieres,$departements);
        return view('cluster.create',[
            'filieres'=>$filieres,
            'departements'=>$departements,
            'communes'=>Commune::all(),
            'arrondissements' => Arrondissement::all(),
            'villages' => Village::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all(),$request->filiere);
        Cluster::create([

       'nom' => $request->input('cluster'),
       'filiere_id'=>$request->filiere,
       'village_id'=>$request->village
        ]);
         return redirect()->route('clusters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
