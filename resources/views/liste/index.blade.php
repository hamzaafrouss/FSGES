@extends('layout')
@section('content')
<h3>Réunions liste</h3>
  
<div class="table-wrapper">
<table classe="fl-table" style="border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 120%;
    text-align:center;
    margin-left: -10%;
    white-space: nowrap;
    background-color: white;">
        <thead><tr>
            <th>Objet</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Afficher Tout</th>
            <th>Mis à jour</th>
            <th>Supprimer</th>
           
            </tr></thead>
            <tbody>
                @foreach($listes as $liste)
                <tr>
                    <td>{{$liste->Objet}}</td>
                    <td>{{$liste->Nom}}</td>
                    <td>{{$liste->Prenom}}</td>
                    <td>
                        <form method="post" action="{{route('listes.destroy',$liste->id)}}">
                        @csrf
                        @method('DELETE')
                    <a class="btn btn-secondary" href="{{route('listes.show',$liste->id)}}">Afficher</a>
                
                    </td>
                    <td> 
                    
                    <a class="btn btn-primary" href="{{route('listes.edit',$liste->id)}}">Modifier</a>
                      
                    </td>
                    <td>
               
                    <input type="submit" class="btn btn-danger" value="Supprimer"/> 
                        </form>
                    </td>
                </tr>
                
            </tbody>
        @endforeach
    </table>
</div>
<div style="margin-left: 35%; margin-top:-5%" class="row">{{ $listes->links()}}</div>
@endsection