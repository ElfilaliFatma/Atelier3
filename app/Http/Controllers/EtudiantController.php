<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;
use App\Http\Controllers\Validate;


class EtudiantController extends Controller

{
   public function index()
   {
   
    $liste = Etudiant::orderby('nom','asc')->get();
    return view('etudiant',compact('liste'));

   }
   public function create()
   {
    $classes = Classe::all();
    return view('create',compact('classes'));
   }

   public function store(Request $request)
   {
       $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'classe_id' => 'required',
       ]);
   
       // Create a new Etudiant and save it to the database
       Etudiant::create([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'classe_id' => $request->classe_id,
       ]);
   
       return redirect()->route('etudiant')
                        ->with('success', 'Student created successfully');
   }
   
   public function update(Request $request, Etudiant $etudiant)
   {
       $request->validate([
           'nom' => 'required',
           'prenom' => 'required',
           'classe_id' => 'required',
       ]);
   
       $etudiant->update([
           'nom' => $request->nom,
           'prenom' => $request->prenom,
           'classe_id' => $request->classe_id,
       ]);
   
       return redirect()->route('etudiant')
                        ->with('success', 'Student updated successfully');
   }
   
public function delete(Etudiant $etudiant){
   $etudiant-> delete();
   return redirect()->route('etudiant')
                   ->with('success','Post deleted successfully');
}


public function edit(Etudiant $etudiant)
{
    $classes = Classe::all(); // Get all classes
    return view('edit', compact('etudiant', 'classes')); // Pass the student and classes to the view
}

}