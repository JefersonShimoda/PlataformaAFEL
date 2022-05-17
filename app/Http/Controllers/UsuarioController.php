<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function inicial(){
        return view('site.inicial');
    }

    public function cadastro(){
        return view('site.cadastro');
    }
}
