<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Gate;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::id();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('character.index')->with('user', $user_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('character.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $user = auth()->user();
        Character::create($data);


        return view('profile.user.index', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('character.show', [
            'character' => Character::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('character.edit', [

            'character' => Character::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /*if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }*/

        $character = $request->all();
        $character = Character::find($id);
        $character->update($request->all());


        return redirect()->route('profile.user.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $character = $request->all();
        $character = Character::find($id);
        $character->delete();

        return redirect()->route('profile.user.index');
    }
}
