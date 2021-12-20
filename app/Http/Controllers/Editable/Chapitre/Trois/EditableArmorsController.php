<?php

namespace App\Http\Controllers\Editable\Chapitre\Trois;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Trois\Armors;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableArmorsController extends Controller
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
        $armors = Armors::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.trois.armors.index')->with('armors', $armors);
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
        return view('editable.chapitre.trois.armors.create');
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

            Armors::create($request->all());

            return redirect()->route('trois.armors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Armors  $armors
     * @return \Illuminate\Http\Response
     */
    public function show(Armors $armors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Trois\Armors  $armors
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        return view('editable.chapitre.trois.armors.edit', [

            'armors' => Armors::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Trois\Armors  $armors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $armors = $request->all();
        $armors = Armors::find($id);
        $armors->update($request->all());

        return redirect()->route('trois.armors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Trois\Armors  $armors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }

        $armors = $request->all();
        $armors = Armors::find($id);
        $armors->delete();

        return redirect()->route('trois.armors.index');
    }
}
