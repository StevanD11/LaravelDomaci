<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zaposleni;

class ZaposleniController extends Controller
{
    public function index()
    {
        $zaposleni = Zaposleni::all();
        return view('zaposleni.index')->with('zaposleni', $zaposleni);
    }
}
