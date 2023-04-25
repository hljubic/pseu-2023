<?php

namespace App\Http\Controllers;

use App\Models\Grad;
use Illuminate\Http\Request;

class GradController extends Controller
{
    public function index()
    {
        return Grad::all();
    }

    public function store(Request $request)
    {
        $grad = new Grad();
        $grad->naziv = $request->naziv;
        $grad->postanski_broj = $request->pb;
        $grad->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $grad = Grad::find($request->id);
        $grad->naziv = $request->naziv;
        $grad->postanski_broj = $request->pb;
        $grad->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Grad::find($id)->delete();

        return 'Izbrisano';
    }
}
