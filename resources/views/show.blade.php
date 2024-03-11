@extends('template')

@section('contenu')
<div class="background-image">
<div class="show-card">
    {{-- @dd($ferry); --}}
    <header class="show-card-header">
        <p class="show-card-header-title">
            <img src="../images/{{$ferry->photo}}">
        </p>
    </header>
<body class="show-body">
    <div class="show-card-content">
        <div class="show-content">
            <p>{{$ferry->nom}}</p>
            <p>{{$ferry->longueur}} mètres</p>
            <p>{{$ferry->largeur}} mètres</p>
            <p>{{$ferry->vitesse}} noeuds</p>
        </div>
    </div>
    <p>Liste des équipements</p>
    <ul>
        @foreach($ferry->equipement as $equipement)
        <li>{{$equipement->libelle}}</li>
        @endforeach
    </ul>
    <div class="show-buttons">
        <a class="show-btn btn btn-info" href="{{url()->previous()}}">Retour</a>
    </div>
</div>
    
</body>
@endsection
