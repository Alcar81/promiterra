<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Mountshields;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableMountshieldsController extends Controller
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
        $mountshields = Mountshields::all();
        // tu sélectionnes toutes les entrées de la table 'grass'
        return view('editable.chapitre.trois.mountshields.index')->with('mountshields', $mountshields);
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
        return view('editable.chapitre.trois.mountshields.create');
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

            MountShields::create($request->all());

            return redirect()->route('trois.mountshields.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Mountshields  $mountshields
     * @return \Illuminate\Http\Response
     */
    public function show(Mountshields $mountShields)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Mountshields  $mountsshields
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.mountshields.edit', [

            'mountshields' => Mountshields::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Mountshields  $mountshields
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $mountshields = $request->all();
        $mountshields = Mountshields::find($id);
        $mountshields->update($request->all());

        return redirect()->route('trois.mountshields.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Mountshields  $mountShields
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $mountshields = $request->all();
        $mountshields = Mountshields::find($id);
        $mountshields->delete();

        return redirect()->route('trois.mountshields.index');
    }
}
