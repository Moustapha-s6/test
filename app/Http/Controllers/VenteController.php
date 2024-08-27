<?php

namespace App\Http\Controllers;

use App\Models\vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Récupère toutes les ventes et calcule le montant total pour chaque vente
        $ventes = Vente::all()->map(function ($vente) {
            $vente->montant_total = $vente->prix_unitaire * $vente->quantite;
            return $vente;
        });

        return view('Back.vente.index', compact('ventes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Back.vente.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData=$request->validate([
            'reference'=>'required|max:100', 
            'article'=>'required|max:150',
            'prix_unitaire'=>'required|max:150',
            'quantite'=>'required|max:150',
            
        ]);
        $save=new Vente;
        $save->reference=$request->reference;
        $save->article=$request->article;
        $save->prix_unitaire=$request->prix_unitaire;
        $save->quantite=$request->quantite;

        
        
        $save->save();
        return BACK()->with('message', "La Vente a bien été cree !");
    }

    /**
     * Display the specified resource.
     */
    public function show(vente $vente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
          $vente=Vente::findOrFail($id);
        return view('Back.vente.edit', compact('vente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
          $validatedData=$request->validate([
            'reference'=>'required|max:100', 
            'article'=>'required|max:150',
            'prix_unitaire'=>'required|max:150',
            'quantite'=>'required|max:150',
            
        ]);
        $save=Vente::find($id);
        $save->reference=$request->reference;
        $save->article=$request->article;
        $save->prix_unitaire=$request->prix_unitaire;
        $save->quantite=$request->quantite;


        
        
        $save->save();
        return BACK()->with('message', "La vente a bien été Modifié !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vente $vente)
    {
        //
    }
}
