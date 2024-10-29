<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $liste = Client::orderby('Nom','asc')->get();
        return view('client',compact('liste'));
    }

}
