
@extends('template')

<form action ="{{route('ferrys.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="m-b3">
        <label for="nom" class="form-label"> nom</label>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom" value="{{old('nom')}}">
        @error('nom')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="m-b3">
        <label for="longueur" class="form-label">Longueur</label>
        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="longueur" id="longueur" placeholder="longueur" value="{{old('longueur')}}">
        @error('longueur')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

 <div class="m-b3">
        <label for="largeur" class="form-label"> Entrez la largeur</label>
        <input type="text" class="form-control @error('largeur') is-invalid @enderror" name="largeur" id="largeur" placeholder="La largeur" value="{{old('largeur')}}">
        @error('largeur')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
    <div class="m-b3">
        <label for="vitesse" class="form-label"> Vitesse</label>
        <input type="text" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" id="vitesse" placeholder="vitesse" value="{{old('vitesse')}}">
        @error('vitesse')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>


     
    
    <div class="m-b3">
        <label for="photo" class="form-label"> Télécharger la photo</label>
        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo"  value="{{old('photo')}}">
        @error('photo')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
@php 
$i=0;
@endphp
    @foreach($equipements as $equipement)
                        <input
                        type="checkbox"
                        name="equipement_id[]" 
                        id="cbox{{ $i++ }}"
                        value='{{$equipement->id}}'
                        >
                        {{$equipement->libelle}}

                        <br>
    @endforeach

    <div class="control">
        <button class="btn btn-primary"> Envoyer</button>
    </div>

</form>