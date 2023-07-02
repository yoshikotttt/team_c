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
        $editSentences = EditSentence::all();
        return response()->json($editSentences);
     
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



    public function store(Request $request)
    {
        //[重要] バリデーション後で確認する

        $request->validate([
            'user_id' => ['required', 'integer'], 
            'sentence_id' => ['required', 'integer'], 
            'edit_user_id' => ['required', 'integer'], 
            'content' => ['required', 'string', 'max:300'], 
        ]);

        $newSentence = EditSentence::create([
 
            'user_id' => $request->user_id,  
            'sentence_id' => $request->sentence_id,   
            'edit_user_id' => $request->edit_user_id,
            'content' => $request->content,
        ]);

        // $newSentence = EditSentence::create([
        //     'user_id' => $request->input('user_id'),  
        //     'sentence_id' => $request->input('sentence_id'),   
        //     'edit_user_id' => $request->input('edit_user_id'),
        //     'content' => $request->input('content'),
        // ]);
    
        // レスポンスとして作成された文章を返す
        // dd($newSentence);
        return response()->json($newSentence);
    }

}
