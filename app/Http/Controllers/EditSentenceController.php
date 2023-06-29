<?php

namespace App\Http\Controllers;

use App\Models\EditSentence;
use Illuminate\Http\Request;


class EditSentenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

  public function index()
    {
        $sentences = EditSentence::all();
        return response()->json($sentences);
     
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
        $editSentence = EditSentence::with('sentence:id,content')->findOrFail($id);
        
        // $sentenceContent = $editSentence->sentence->content; // 関連する Sentence モデルの文章の内容

        // $sentenceContent を使って必要な処理を行う

        return response()->json($editSentence);
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
