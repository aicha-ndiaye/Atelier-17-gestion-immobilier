<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\commentaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorecommentaireRequest;
use App\Http\Requests\UpdatecommentaireRequest;

class CommentaireController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $biens = bien::FindOrFail($request->id);
        return view('user.commentaire', compact('biens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommentaireRequest $request, commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commentaire $commentaire)
    {
        //
    }
}
