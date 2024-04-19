<x-app-layout>
@extends('layout')
@section('content')
<h3>Réunion détails</h3>
    <table style="border:0px;"><tr>
        <td>
            <p><b class="lbl">Objet:</b>{{$archive->Objet}}</p>
            <p><b class="lbl">Nom:</b>{{$archive->Nom}}</p>
            <p><b class="lbl">Prenom:</b>{{$archive->Prenom}}</p>
            <p><b class="lbl">Service:</b>{{$services[strval($archive->id_Service)]}}</p>
            <p><b class="lbl">Réunion avec:</b>{{$archive->Avec}}</p>
            <p><b class="lbl">Date de début:</b>{{$archive->Debut}}</p>
            <p><b class="lbl">Date de fin:</b>{{$archive->Fin}}</p>
            <p><b class="lbl">Rapport de réunion:</b>{{$archive->Rapport}}</p>
             </td>
    </tr> 

    </table>

@endsection
</x-app-layout>