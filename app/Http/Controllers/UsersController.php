<?php

namespace App\Http\Controllers;

use App\Models\bien;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $biens = bien::all();
        return view('user.dashboard', compact('biens'));
    }
}
