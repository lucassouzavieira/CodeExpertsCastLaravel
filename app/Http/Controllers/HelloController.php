<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
        $mensagem = "Hello, from Variavel";
        return view("hello", ["mensagem" => $mensagem]);
    }
}
