@extends('template')

@section('contenu')
<div class ="card">
    {{-- @dd($ferry); --}}
    <header class="card-header">
        <p class = "card-header-title">
            <img src="../images/{{$ferry->photo}}">
        </p>
    </header>
    <div class="card-content">
        <div class="content">
                <p> {{$ferry->nom}}</p>
                <p> {{$ferry->longueur}}mètres</p>
                <p> {{$ferry->largeur}}mètres</p>
                <p> {{$ferry->vitesse}}noeuds</p>
        </div>
    </div>
<p>liste des equipements</p>
    <ul>
        @foreach($ferry->equipement as $equipement)
        <li>{{$equipement->libelle}}</li>
        @endforeach
    </ul>
    <div class="d-flex justify-content-center mt-4">
                <a class="btn btn-info" href="{{url()->previous()}}">Retour</a>

    </div>
</div>
@endsection