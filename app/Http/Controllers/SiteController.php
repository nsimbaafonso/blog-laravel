<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Página home
    public function index() {
        return view("site.home");
    }

    //Página sobre
    public function sobre() {
        return view("site.sobre");
    }

    //Página categoria
    public function categoria() {
        return view("site.categoria");
    }

    //Página post
    public function post() {
        return view("site.post");
    }

    //Página busca
    public function busca() {
        return view("site.busca");
    }

    //Página contato
    public function contato() {
        return view("site.contato");
    }
}
