<?php

namespace App\Http\Controllers;

use App\Models\Rubrika;
use Illuminate\Http\Request;

class RubrikaController extends Controller
{
    public function index()
    {
        return Rubrika::all();
    }

    public function store(Request $request)
    {
        $grad = new Rubrika();
        $grad->naziv = $request->naziv;
        $grad->opis = $request->opis;
        $grad->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $grad = Rubrika::find($request->id);
        $grad->naziv = $request->naziv;
        $grad->opis = $request->opis;
        $grad->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Rubrika::find($id)->delete();

        return 'Izbrisano';
    }
}
