<?php

namespace App\Http\Controllers\Editable;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class EditableCityController extends Controller
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
        return view('editable.ville.index')->with('cities', $cities);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editable.ville.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            City::create($request->all());

            return redirect()->route('editor.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('editable.ville.show', [
            'ville' => City::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\city  $city
     * @return \Illuminate\Http\Response
     * if (Gate::denies('edit-users')) {
     *       return redirect()->route('home');
    *  }
     *
     */
    public function edit($id)
    {

        return view('editable.ville.edit', [

            'ville' => City::findOrFail($id)
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ville = $request->all();
        $ville = City::find($id);
        $ville->update($request->all());

        return redirect()->route('editor.user.index');

    }








    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $ville = $request->all();
        $ville = City::find($id);
        $ville->delete();

        return redirect()->route('editor.user.index');
    }



}
