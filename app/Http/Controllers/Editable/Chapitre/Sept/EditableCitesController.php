<?php

namespace App\Http\Controllers\Editable\Chapitre\Sept;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;

class EditableCitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cities = City::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.sept.cites.show')->with('cities', $cities);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Chapitre\7\Cites  $cites
     * @return \Illuminate\Http\Response
     */
    public function show(Cites $cites)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Chapitre\7\Cites  $cites
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }
        return view('editable.chapitre.sept.cites.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Chapitre\7\Cites  $cites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cites $cites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Chapitre\7\Cites  $cites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cites $cites)
    {
        //
    }
}
