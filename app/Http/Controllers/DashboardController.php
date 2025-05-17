<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Exibe a tela inicial do sistema (dashboard).
     */
    public function index()
    {
        return view('welcome');
    }

}
