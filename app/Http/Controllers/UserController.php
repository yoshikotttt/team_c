<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personality;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // これは使えるやつ
    public function index()
    {
        // users テーブルの全データを取得して JSON 形式で返す
        $users = User::all();
        return response()->json($users);  

    }

    // public function index()
    // {
    //     $users = User::with('personalities')->get();

    //     return response()->json($users);
    // }

    //$event = Event::with('members')->find($eid);

    // public function getData()
    // {
    //     $users = User::all();
    //     $personalities = Personality::all();

    //     return response()->json([
    //         'users' => $users,
    //         'posts' => $personalities,
    //     ]);
    // }




    //これも使えるかもしれない
    // public function index()
    // {
    //     // users テーブルの全データを取得して JSON 形式で返す
    //     $users = User::with('personalities')->get();

    //     // 必要なデータのみを取り出す
    //     $formattedUsers = $users->map(function ($user) {
    //         return [
    //             'id' => $user->id,
    //             'name' => $user->name,
    //             'personalities' => $user->personalities->pluck('name'),
    //         ];
    //     });

    //     return response()->json($formattedUsers);
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);  

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
