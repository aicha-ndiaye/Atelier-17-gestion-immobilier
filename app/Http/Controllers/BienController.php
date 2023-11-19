<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Http\Requests\StorebienRequest;
use App\Http\Requests\UpdatebienRequest;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ajoutbien');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.voirdetails');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'statut' => 'required',
            'adresse' => 'required',
            'image' => 'required',
            'description' => 'nullable',
        ]);
        $bien= new Bien();
        $bien->nom=$request->nom;
        $bien->categorie=$request->categorie;
        $bien->image=$request->image;
        $bien->description=$request->description;
        $bien->localisation=$request->adresse;
        $bien->statu=$request->statut;
        $bien->datePublication=$request->date;
      
       
       
        // Bien::create($validatedData);

        // return redirect()->route()->with("success","Bien enregistré avec succès");

    }

    /**
     * Display the specified resource.
     */
    public function show(bien $bien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bien $bien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebienRequest $request, bien $bien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bien $bien)
    {
        //
    }
}
