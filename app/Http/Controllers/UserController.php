<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function React\Promise\all;

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
        return view('user.list', compact('users','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required',
            'txtPhone' => 'required|numeric',
            'txtDateOfBirth' => 'required',
            'txtGender' => 'required',
            'txtPhotos' => 'required',
        ]);

        $user = new User([
            'firstname' => $request->get('txtFirstName'),
            'lastname'=> $request->get('txtLastName'),
            'address'=> $request->get('txtAddress'),
            'phone'=> $request->get('txtPhone'),
            'dateofbirth'=> $request->get('txtDateOfBirth'),
            'gender'=> $request->get('txtGender'),
            'photos'=> $request->get('txtPhotos')
        ]);

        $user->save();
        return redirect('/user')->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'txtFirstName'=>'required',
            'txtLastName'=> 'required',
            'txtAddress' => 'required',
            'txtPhone' => 'required',
            'txtDateOfBirth' => 'required',
            'txtGender' => 'required',
            'txtPhotos' => 'required',
        ]);

        $user = User::find($id);
        $user->firstname = $request->get('txtFirstName');
        $user->lastname = $request->get('txtLastName');
        $user->address = $request->get('txtAddress');
        $user->phone = $request->get('txtPhone');
        $user->dateofbirth = $request->get('txtDateOfBirth');
        $user->gender = $request->get('txtGender');
        $user->photos = $request->get('txtPhotos');

        $user->update();

        return redirect('/user')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/user')->with('success', 'User deleted successfully');
    }
}
