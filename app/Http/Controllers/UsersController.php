<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\commentaire;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {
        $biens = bien::all();
        $commentaires = Commentaire::where('users_id', Auth::user()->id)->firstOrFail();
        // dd($commentaires->auteur);

        return view('user.dashboard', compact('biens', 'commentaires'));
    }
}
