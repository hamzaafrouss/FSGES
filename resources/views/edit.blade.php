<x-app-layout>
@extends('layout')
@section('content')
<h3>Modifier la réunion</h3>
<form method="post" action="{{route('liste.update',$liste)}}" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="Objet">Objet:</label>
        <input type="text" class="form-control" name="Objet" value="{{$liste->Objet}}"/>
    </div>

    <div class="form-group">
        <label for="Nom">Nom:</label>
        <input type="text" class="form-control" name="Nom" value="{{$liste->Nom}}"/>
    </div>
    <div class="form-group">
        <label for="Prenom">Prenom:</label>
        <input type="text" class="form-control" name="Prenom" value="{{$liste->Prenom}}"/>
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
        <label for="Avec">Réunion avec:</label>
        <input type="text" class="form-control" name="Avec" value="{{$liste->Avec}}"/>
    </div>

    <div class="form-group">
        <label for="Debut">Date de début:</label>
        <input type="datetime-local" class="form-control" name="Debut" value="{{$liste->Debut}}"/>
    </div>

    <div class="form-group">
        <label for="Fin">Date de fin:</label>
        <input type="datetime-local" class="form-control" name="Fin" value="{{$liste->Fin}}"/>
    </div>

    <div class="form-group">
        <label for="Rapport">Rapport de réunion:</label>
        <textarea  name="Rapport"
        class="form-control"  >
        
        </textarea>
    </div>
   
    <button type="submit"  class="btn btn-info mt-3" >Modifier</button>
</form>
@endsection('content')
</x-app-layout>