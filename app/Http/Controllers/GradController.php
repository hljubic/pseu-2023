<?php

namespace App\Http\Controllers;

use App\Models\Grad;
use Illuminate\Http\Request;

class GradController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Grad::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) {
        $grad = new Grad();
        $grad->naziv = $request->naziv;
        $grad->postanski_broj = $request->pb;
        $grad->save();

        return 'Dodano';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request) {
        $grad = Grad::find($request->id);
        $grad->naziv = $request->naziv;
        $grad->postanski_broj = $request->pb;
        $grad->save();

        return 'Uređeno';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        Grad::find($id)->delete();

        return 'Izbrisano';
    }
}
