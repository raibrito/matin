<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        $users = User::get();

        return view('user.list', ['users' => $users]);
    }

    public function new(){
        return view('user.form');
    }

    public function add(Request $request){
        $user = new User;
        $user->create($request->all());
        return Redirect::to ('/users');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.form', ['user'=>$user]);
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return Redirect::to('/users');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return Redirect::to('/users');
    }

}
