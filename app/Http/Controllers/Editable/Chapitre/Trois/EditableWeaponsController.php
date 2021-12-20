<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Weapons;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableWeaponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }
        $weapons = Weapons::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.trois.weapons.index')->with('weapons', $weapons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }
        return view('editable.chapitre.trois.weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

            Weapons::create($request->all());

            return redirect()->route('trois.weapons.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function show(Weapons $weapons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.weapons.edit', [

            'weapons' => Weapons::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $weapons = $request->all();
        $weapons = Weapons::find($id);
        $weapons->update($request->all());

        return redirect()->route('trois.weapons.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $weapons = $request->all();
        $weapons = Weapons::find($id);
        $weapons->delete();

        return redirect()->route('trois.weapons.index');
    }
}
