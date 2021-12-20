<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Shields;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableShieldsController extends Controller
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
        $shields = Shields::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.trois.shields.index')->with('shields', $shields);
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
        return view('editable.chapitre.trois.shields.create');
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

            Shields::create($request->all());

            return redirect()->route('trois.shields.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Shields  $shields
     * @return \Illuminate\Http\Response
     */
    public function show(Shields $shields)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Shields  $shields
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.shields.edit', [

            'shields' => Shields::findOrFail($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Shields  $shields
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $shields = $request->all();
        $shields = Shields::find($id);
        $shields->update($request->all());

        return redirect()->route('trois.shields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Shields  $shields
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $shields = $request->all();
        $shields = Shields::find($id);
        $shields->delete();

        return redirect()->route('trois.shields.index');
    }
}
