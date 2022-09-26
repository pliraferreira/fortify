<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostra a tela inicial da aplicação
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }
}
