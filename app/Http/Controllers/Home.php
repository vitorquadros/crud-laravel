<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    private $message ='Mundo';

    public function index() {
        echo "Olá, $this->message!!";
        dd($this);
    }
}

