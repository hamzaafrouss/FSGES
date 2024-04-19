<x-app-layout>
@extends('layout')
@section('content')
<h3>Réunions Archive</h3>
  
<div class="table-wrapper" >
<table classe="fl-table" style="border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border-width: 5px;
    border-style: double;
    border-color : #717171;
    border-collapse: collapse;
    width: 120%;
    text-align:center;
    margin-left: -10%;
    white-space: nowrap;
    background-color: white;"
   >
        <thead style="border-width: 5px;
        border-style: double;
        border-color : #717171;">
        <tr>
            <th style="border-width: 5px;
        border-style: double;
        border-color : #717171;">Objet</th>
            <th style="border-width: 5px;
        border-style: double;
        border-color : #717171;">Date de début</th>
            <th style="border-width: 5px;
        border-style: double;
        border-color : #717171;">Date de fin</th>
            <th style="border-width: 5px;
        border-style: double;
        border-color : #717171;">Afficher Tout</th>
           
            </tr></thead>
            <tbody style="border-width: 5px;
            border-style: double;
            border-color : #717171;">
                @foreach($listes as $liste)
                <tr style="border-width: 5px;
        border-style: double;
        border-color : #717171;">
                    <td style="border-width: 5px;
        border-style: double;
        border-color : #717171;">{{$liste->Objet}}</td>
                    <td style="border-width: 5px;
        border-style: double;
        border-color : #717171;">{{$liste->Debut}}</td>
                    <td style="border-width: 5px;
        border-style: double;
        border-color : #717171;">{{$liste->Fin}}</td>
                    <td style="border-width: 5px;
        border-style: double;
        border-color : #717171;">
                        <form method="post" action="{{route('liste.destroy',$liste->id)}}">
                        @csrf
                    <a class="btn btn-info" style="font-size: 13px; top:0; bottom:0; left:0; right: 0; margin: 10px;" href="{{route('archive.show',$liste->id)}}">Afficher</a>
                  
                        </form>
                </tr>
                @endforeach       
        </tbody>
        
    </table>
</div>
<div style="margin-left: 35%; margin-top:-5%;" class="row">{{ $listes->links()}}</div>
@endsection
</x-app-layout>
