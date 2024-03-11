<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation</title>
   
</head>
<body>
 

@extends('template')

<form action="{{ route('ferrys.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="m-b3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
        @error('nom')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="m-b3">
        <label for="longueur" class="form-label">Longueur</label>
        <input type="text" class="form-control @error('longueur') is-invalid @enderror" name="longueur" id="longueur" placeholder="Longueur" value="{{ old('longueur') }}">
        @error('longueur')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="m-b3">
        <label for="largeur" class="form-label">Largeur</label>
        <input type="text" class="form-control @error('largeur') is-invalid @enderror" name="largeur" id="largeur" placeholder="Largeur" value="{{ old('largeur') }}">
        @error('largeur')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="m-b3">
        <label for="vitesse" class="form-label">Vitesse</label>
        <input type="text" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" id="vitesse" placeholder="Vitesse" value="{{ old('vitesse') }}">
        @error('vitesse')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="m-b3">
        <label for="photo" class="form-label">Télécharger la photo</label>
        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo" value="{{ old('photo') }}">
        @error('photo')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    @php 
    $i = 0;
    @endphp

    @foreach($equipements as $equipement)
    <div class="m-b3">
        <input type="checkbox" name="equipement_id[]" id="cbox{{ $i++ }}" value="{{ $equipement->id }}">
        <label for="cbox{{ $i }}">{{ $equipement->libelle }}</label>
    </div>
    @endforeach

    <div class="control">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>
