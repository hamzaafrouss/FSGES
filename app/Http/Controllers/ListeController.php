<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liste;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DB::table('listes')->paginate(7);
        return view('index',['listes'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::all();
        return view('create',compact("services"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     

    //    $liste=Liste::create($validateData);
 

       $liste=new Liste();
       $liste->Objet=$request->Objet;
       $liste->Nom=$request->Nom;
       $liste->Prenom=$request->Prenom;
       $liste->id_Service=$request->Service;
       $liste->Avec=$request->Avec;
       $liste->Debut=$request->Debut;
       $liste->Fin=$request->Fin;
       $liste->Rapport=$request->Rapport;
      
       
       $liste->save();

    return redirect('/liste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Liste $liste)
    {
        $services=Service::all()->pluck('service','id');
        return view('show',compact('liste','services'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Liste $liste)
    {
        $services = Service::all();
        $listes = Liste::all();
        return view('edit', compact('liste','services'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Liste $liste)
    {
      
        

        
       $liste->Objet=$request->Objet;
       $liste->Nom=$request->Nom;
       $liste->Prenom=$request->Prenom;
       $liste->id_Service=$request->Service;
       $liste->Avec=$request->Avec;
       $liste->Debut=$request->Debut;
       $liste->Fin=$request->Fin;
       $liste->Rapport=$request->Rapport;

            $liste->save();

           return redirect()->route('liste.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liste $liste)
    {
       $liste->delete();

       return redirect()->route('liste.index');
    }
}