<x-app-layout>
@extends('layout')
@section('content')
<h3>Réunion détails</h3>
    <table style="border:0px;"><tr>
        <td>
            <p><b class="lbl">Objet:</b>{{$liste->Objet}}</p>
            <p><b class="lbl">Nom:</b>{{$liste->Nom}}</p>
            <p><b class="lbl">Prenom:</b>{{$liste->Prenom}}</p>
            <p><b class="lbl">Service:</b>{{$services[strval($liste->id_Service)]}}</p>
            <p><b class="lbl">Réunion avec:</b>{{$liste->Avec}}</p>
            <p><b class="lbl">Date de début:</b>{{$liste->Debut}}</p>
            <p><b class="lbl">Date de fin:</b>{{$liste->Fin}}</p>
            <p><b class="lbl">Rapport de réunion:</b>{{$liste->Rapport}}</p>
             </td>
    </tr> 

    </table>

@endsection
</x-app-layout>