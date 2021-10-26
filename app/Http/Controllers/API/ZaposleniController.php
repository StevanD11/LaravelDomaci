<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Zaposleni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZaposleniController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required',
            'prezime' => 'required',
            'adresa' => 'required',
            'plata' => 'required',
            'kompanija_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation error!', $validator->errors()]);
        }

        $zaposleni = new Zaposleni;
        $zaposleni->ime = $request->ime;
        $zaposleni->prezime = $request->prezime;
        $zaposleni->adresa = $request->adresa;
        $zaposleni->plata = $request->plata;
        $zaposleni->kompanija_id = $request->kompanija_id;

        $zaposleni->save();

        return response()->json(['message' => 'Zaposleni/a je uspesno sacuvan/a!'], 200);
    }




    public function index()
    {
        $zaposleni = Zaposleni::all();
        return response()->json(['zaposleni' => $zaposleni], 200);
    }



    public function show($id)
    {
        $zaposleni = Zaposleni::find($id);

        if ($zaposleni) {
            return response()->json(['zaposleni', $zaposleni], 200);
        } else {
            return response()->json(['message' => 'Ne postoji zaposleni/a sa tim ID-em!'], 404);
        }
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required',
            'prezime' => 'required',
            'adresa' => 'required',
            'plata' => 'required',
            'kompanija_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation error!', $validator->errors()]);
        }


        $zaposleni = Zaposleni::find($id);
        if ($zaposleni) {
            $zaposleni->ime = $request->ime;
            $zaposleni->prezime = $request->prezime;
            $zaposleni->adresa = $request->adresa;
            $zaposleni->plata = $request->plata;
            $zaposleni->kompanija_id = $request->kompanija_id;

            $zaposleni->update();

            return response()->json(['message' => 'Zaposleni/a je uspesno izmenjen/a!'], 200);
        } else {
            return response()->json(['message' => 'Ne postoji zaposleni/a sa tim ID-em!'], 404);
        }
    }



    public function destroy($id)
    {
        $zaposleni = Zaposleni::find($id);

        if ($zaposleni) {
            $zaposleni->delete();
            return response()->json(['message' => 'Zaposleni/a je uspesno obrisan/a!'], 200);
        } else {
            return response()->json(['message' => 'Ne postoji zaposleni/a sa tim ID-em!'], 404);
        }
    }
}
