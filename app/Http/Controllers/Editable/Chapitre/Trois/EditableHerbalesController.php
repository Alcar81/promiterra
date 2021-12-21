<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Herbales;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableHerbalesController extends Controller
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
        $herbales = Herbales::all();
        // tu sélectionnes toutes les entrées de la table 'grass'
        return view('editable.chapitre.trois.herbales.index')->with('herbales', $herbales);
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
        return view('editable.chapitre.trois.herbales.create');
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

            Herbales::create($request->all());

            return redirect()->route('trois.herbales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Herbales  $herbales
     * @return \Illuminate\Http\Response
     */
    public function show(Herbales $herbales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Herbales  $herbales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.herbales.edit', [

            'herbales' => Herbales::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Herbales  $herbales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $herbales = $request->all();
        $herbales = Herbales::find($id);
        $herbales->update($request->all());

        return redirect()->route('trois.herbales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Herbales  $herbales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $herbales = $request->all();
        $herbales = Herbales::find($id);
        $herbales->delete();

        return redirect()->route('trois.herbales.index');
    }
}
