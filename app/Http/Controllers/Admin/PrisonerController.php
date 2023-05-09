<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    public function index() {
        return view('admins.prisoner.index');
    }

    public function create() {
        return view('admins.prisoner.create');
    }

    public function detail() {
        return view('admins.prisoner.detail');
    }

    public function edit() {
        return view('admins.prisoner.edit');
    }
}
