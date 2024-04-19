<x-app-layout>
@extends('layout')
@section('content')
<h3>Ajouter Réunion</h3>
<form method="POST"  action="{{route('liste.store')}}" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label for="Objet">Objet:</label>
        <input type="text" class="form-control" name="Objet"/>
    </div>

    <div class="form-group">
        <label for="Nom">Nom:</label>
        <input type="text" class="form-control" name="Nom"/>
    </div>
    <div class="form-group">
        <label for="Prenom">Prenom:</label>
        <input type="text" class="form-control" name="Prenom"/>
    </div>

    <div class="form-group">
        <label for="Service">Service:</label>
        <select class="form-control" name="Service">
            @foreach ($services as $Service)
            <option value="{{$Service->id}}">
                {{$Service->service}}
            </option>
            @endforeach
        </select>
    </div> 
    
    <div class="form-group">
        <label for="Debut">Réunion avec:</label>
        <input type="text" class="form-control" name="Avec"/>
    </div>

    <div class="form-group">
        <label for="Debut">Date de début:</label>
        <input type="datetime-local" class="form-control" name="Debut"/>
    </div>

    <div class="form-group">
        <label for="Fin">Date de fin:</label>
        <input type="datetime-local" class="form-control" name="Fin"/>
    </div>

    <div class="form-group">
        <label for="Rapport">Rapport de réunion:</label>
        <input type="textarea" class="form-control" name="Rapport" />
    </div>
    
   
    <button type="submit"  class="btn btn-info mt-3" >Ajouter</button>
</form>
@endsection('content')
</x-app-layout>