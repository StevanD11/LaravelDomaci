<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zaposleni;
use App\Models\Kompanija;

class ZaposleniController extends Controller
{
    public function index()
    {
        $zaposleni = Zaposleni::all();
        $kompanije = Kompanija::all();
        return view('zaposleni.index')->with('zaposleni', $zaposleni)->with('kompanije', $kompanije);
    }
}
