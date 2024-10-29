@extends('Layout') <!-- Ensure that 'Layout' is the correct name of your layout file -->
@section('content')
<div class="row" style="margin-top: 5rem">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('etudiant.create') }}">Create New Student</a>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Classe</th>
        <th>Actions</th>
    </tr>

    @foreach ($liste as $value)
    <tr>
        <td>{{ $loop->index + 1 }}</td> 
        <td>{{ $value->nom }}</td>
        <td>{{ $value->prenom }}</td>
        
       
        <td>{{ $value->classe ? $value->classe->libelle : 'No Classe Assigned' }}</td>

        <td>
            <a class="btn btn-info" href="">Show</a>
            <a class="btn btn-primary" href="{{ route('etudiant.edit', $value->id) }}">Edit</a>
            <form action="{{ route('etudiant.delete', $value->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
