<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function index() {
        return view('index');
    }
}
