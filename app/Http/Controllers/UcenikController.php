<?php

namespace App\Http\Controllers;

use App\Models\Ucenik;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UcenikController extends Controller
{
    public function index()
    {
        return Ucenik::with('grad')->get();
    }

    public function store(Request $request)
    {
        $grad = new Ucenik();
        $grad->ime = $request->ime;
        $grad->datum_rodjenja = Carbon::parse($request->datum_rodjenja)->toDateString();
        $grad->jmbg = $request->jmbg;
        $grad->spol = $request->spol;
        $grad->grad_id = $request->grad_id;
        $grad->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $grad = Ucenik::find($request->id);
        $grad->ime = $request->ime;
        $grad->datum_rodjenja = Carbon::parse($request->datum_rodjenja)->toDateString();
        $grad->jmbg = $request->jmbg;
        $grad->spol = $request->spol;
        $grad->grad_id = $request->grad_id;
        $grad->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ucenik::find($id)->delete();

        return 'Izbrisano';
    }
}
