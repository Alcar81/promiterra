<?php

namespace App\Http\Controllers\Editable\Chapitre;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\City;
use Illuminate\support\Facades\Gate;

class EditableChapitreSeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        if (Gate::denies('edit-users')) {
            return redirect()->route('login');
        }
        $cities = City::all();
        // tu sélectionnes toutes les entrées de la table 'cities'
        return view('editable.chapitre.sept.cites.show')->with('cities', $cities);
    }
    */

}
