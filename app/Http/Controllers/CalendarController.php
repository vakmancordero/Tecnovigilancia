<?php

namespace Tecnovigilancia\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller {

    protected $redirectTo = '/';

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('calendar.index');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show($id) {

    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }

}
