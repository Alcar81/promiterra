<?php

namespace App\Http\Controllers\Editable\Chapitre\Cinq;

use App\Http\Controllers\Controller;
use App\Models\Chapitre\Cinq\Careers;
//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;



class EditableCareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers = Careers::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.cinq.careers.index')->with('careers', $careers);

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
        return view('editable.chapitre.cinq.careers.create');
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

            Careers::create($request->all());

            return redirect()->route('cinq.careers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapitre\Cinq\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function show(Careers $careers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chapitre\Cinq\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function edit(Careers $careers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapitre\Cinq\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Careers $careers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapitre\Cinq\Careers  $careers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Careers $careers)
    {
        //
    }
}
