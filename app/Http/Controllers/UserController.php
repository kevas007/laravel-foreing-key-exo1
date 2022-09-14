<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }
       /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new User();
        $store->email = $request->email;
        $store->nickname = $request->nickname;

        //store profil
        $profil =  new Profil;

        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request ->phone;
        $profil->save();


        $store->profil_id =$profil->id;

        $store->save();
        return redirect()->back();
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $edit =  $user;
        // dd($edit);
        return  view('pages.edit',compact('edit') );
    }


   /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::find($id);
        $update->email = $request->email;
        $update->nickname = $request->nickname;

        $profil = Profil::find($update->profil_id);

        $profil->name = $request->name;
        $profil->age = $request->age;
        $profil->phone = $request ->phone;
        $profil->save();

        $update->save();

        return redirect()->back();

    }
}
