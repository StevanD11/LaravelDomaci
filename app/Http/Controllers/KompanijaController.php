<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kompanija;

class KompanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompanije = Kompanija::all();
        return view('kompanija.index')->with('kompanije', $kompanije);
    }
}
