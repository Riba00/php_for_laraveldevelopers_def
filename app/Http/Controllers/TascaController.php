<?php

namespace App\Http\Controllers;

use App\Models\Tasca;

class TascaController extends Controller
{
    public function index()
    {
        return view('tasques',[
            'tasques' => Tasca::all()
        ]);
    }
}
