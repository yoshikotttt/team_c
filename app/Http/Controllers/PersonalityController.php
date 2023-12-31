<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personality;


class PersonalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personalities = Personality::all();
        return response()->json($personalities);
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
    public function show(string $id) //$idはパスパラメータ
    {
        $personalities = Personality::where('id',$id)->get();
        return response()->json($personalities);
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
    public function destroy(string $id)
    {
        //
    }
}
