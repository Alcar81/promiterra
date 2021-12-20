<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Objects;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableObjectsController extends Controller
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
        $objects = Objects::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.trois.objects.index')->with('objects', $objects);
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
        return view('editable.chapitre.trois.objects.create');
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

            Objects::create($request->all());

            return redirect()->route('trois.objects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function show(Objects $objects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.objects.edit', [

            'objects' => Objects::findOrFail($id)
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $objects = $request->all();
        $objects = Objects::find($id);
        $objects->update($request->all());

        return redirect()->route('trois.objects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $objects = $request->all();
        $objects = Objects::find($id);
        $objects->delete();

        return redirect()->route('trois.objects.index');
    }
}
