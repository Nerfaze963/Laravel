<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation</title>
    <link rel="stylesheet" href="resources\css\show.css">
    <link rel="stylesheet" href="resources\css\custom.css"> <!-- Lien vers votre fichier CSS externe -->
</head>
<body class="create-body">

    @extends('template')

    
    <div class="create-container">
        <form action="{{ route('ferrys.store') }}" method="POST" enctype="multipart/form-data" class="create-form">
            @csrf
            <div class="create-group">
                <label for="nom" class="create-label">Nom</label>
                <input type="text" class="create-input @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                @error('nom')
                <div class="create-error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="create-group">
                <label for="longueur" class="create-label">Longueur</label>
                <input type="text" class="create-input @error('longueur') is-invalid @enderror" name="longueur" id="longueur" placeholder="Longueur" value="{{ old('longueur') }}">
                @error('longueur')
                <div class="create-error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="create-group">
                <label for="largeur" class="create-label">Largeur</label>
                <input type="text" class="create-input @error('largeur') is-invalid @enderror" name="largeur" id="largeur" placeholder="Largeur" value="{{ old('largeur') }}">
                @error('largeur')
                <div class="create-error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="create-group">
                <label for="vitesse" class="create-label">Vitesse</label>
                <input type="text" class="create-input @error('vitesse') is-invalid @enderror" name="vitesse" id="vitesse" placeholder="Vitesse" value="{{ old('vitesse') }}">
                @error('vitesse')
                <div class="create-error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="create-group">
                <label for="photo" class="create-label">Télécharger la photo</label>
                <input type="file" class="create-input @error('photo') is-invalid @enderror" name="photo" id="photo" value="{{ old('photo') }}">
                @error('photo')
                <div class="create-error-message">{{ $message }}</div>
                @enderror
            </div>

            @foreach($equipements as $equipement)
            <div class="create-checkbox-item">
                <input type="checkbox" name="equipement_id[]" id="cbox{{ $loop->index }}" value="{{ $equipement->id }}">
                <label for="cbox{{ $loop->index }}" class="create-checkbox-label">{{ $equipement->libelle }}</label>
            </div>
            @endforeach

            <div class="create-control">
                <button class="create-btn btn-submit" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</body>
</html>
