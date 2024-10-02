<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
class EtudiantController extends Controller
{
   public function index()
   {
   
    $liste = Etudiant::orderby('nom','asc')->get();
  
    return view('etudiant',compact('liste'));

   }
}
