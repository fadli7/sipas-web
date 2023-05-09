<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrisonerController extends Controller
{
    public function index() {
        $test = 'test';

        return view('admins.prisoner', compact(['test']));
    }
}
