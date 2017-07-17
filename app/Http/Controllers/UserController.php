<?php

namespace Tecnovigilancia\Http\Controllers;

use Illuminate\Http\Request;
use Tecnovigilancia\User;

class UserController extends Controller {

    protected $redirectTo = '/';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('users.index');
    }

    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        //Crear usuario
    }

    public function show($id) {
        //return User::find($id);
    }

    public function edit($id) {
        //Editar usuario
        //$user = User::find($id);
    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {
        //
    }

    public function listUsers() {
        return User::all();
    }
}
