<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Gate;
use Illuminate\support\Facades\DB;

class UsersProfileController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$users = User::all();
    //    $data= DB::table('users')
    //  ->select('users.name','characters.character_name')
    //    ->join('characters','users.id', 'characters.user_id')
    //
    //    ->get();
     // echo "<pre>";
     // print_r($data);
    $user = auth()->user();
    return view('profile.user.index', compact('user'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize ('manage', $user);
        return view('profile.user.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {



        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();
        return redirect()->route('profile.user.index')->with('status', 'Le profil a bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('register');
    }
}
