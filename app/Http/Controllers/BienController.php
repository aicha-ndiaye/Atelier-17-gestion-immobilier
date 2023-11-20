<?php

namespace App\Http\Controllers;

use App\Models\bien;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
// use App\Http\Requests\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    $biens= bien::all();
        //  dd($biens);
        return view('admin.dashboard',compact("biens"));
        // $biens= bien::all();
        // return view('admin.ajoutbien');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ajoutbien');
        // return view('admin.voirdetails');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $biens = new bien();
        $request->validate([
            'nombien'=>'required|min:2|max:25',
            'categori'=>'required',
            'adresse'=>'required',
            'image'=>'required',
            'description'=>'required',
            'status'=>'required',
        ]
        );

        $biens->nom = $request->nombien;
        $biens->categorie=$request->categori;
       $biens->image=$request->image;
        $biens->description=$request->description;
        $biens->statu=$request->status;
        $biens->adresse=$request->adresse;
        $biens->datePublication=$request->datepub;
        if ($biens->save()) {
            dd('ok');
        }

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
    public function update(Request $request, bien $bien)
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
