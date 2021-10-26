<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kompanija;
use Illuminate\Support\Facades\Validator;

class KompanijaController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'sediste' => 'required',
            'grad' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation error!', $validator->errors()]);
        }

        $kompanija = new Kompanija;
        $kompanija->naziv = $request->naziv;
        $kompanija->sediste = $request->sediste;
        $kompanija->grad = $request->grad;

        $kompanija->save();

        return response()->json(['message' => 'Kompanija je uspesno sacuvana!'], 200);
    }


    public function index()
    {
        $kompanije = Kompanija::all();
        return response()->json(['kompanije' => $kompanije], 200);
    }

    public function show($id)
    {
        $kompanija = Kompanija::find($id);

        if ($kompanija) {
            return response()->json(['kompanija', $kompanija], 200);
        } else {
            return response()->json(['message' => 'Ne postoji kompanija sa tim ID-em!'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'sediste' => 'required',
            'grad' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Validation error!', $validator->errors()]);
        }


        $kompanija = Kompanija::find($id);
        if ($kompanija) {
            $kompanija->naziv = $request->naziv;
            $kompanija->sediste = $request->sediste;
            $kompanija->grad = $request->grad;

            $kompanija->update();

            return response()->json(['message' => 'Kompanija je uspesno izmenjena!'], 200);
        } else {
            return response()->json(['message' => 'Ne postoji kompanija sa tim ID-em!'], 404);
        }
    }


    public function destroy($id)
    {
        $kompanija = Kompanija::find($id);

        if ($kompanija) {
            $kompanija->delete();
            return response()->json(['message' => 'Kompanija je uspesno obrisana!'], 200);
        } else {
            return response()->json(['message' => 'Ne postoji kompanija sa tim ID-em!'], 404);
        }
    }
}
