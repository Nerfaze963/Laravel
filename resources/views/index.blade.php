@extends('template')

@section('contenu')
@if(session()->has('info'))
<div class="alert alert-info alert-dismissible fade show js-alert" role="alert">
    <strong> {{session('info')}}</strong>
</div>
@endif


<div style="text-align: center">
<h1 style="margin-bottom: 3%">Les Ferrys </h1>
    <form action="{{route('ferrys.create')}}">
        @csrf
        @method('CREATE')
        <button class="btn btn-danger" >Ajouter</button>
    </form></td>
    <div class="d-flex justify-content-center mt-3">
        <a href="{{route('pdf')}}" class="btn btn-outline-primary">Générer un PDF</a>
    </div>


</div>
<table class ="table">
    <thead class = "table table-striped">
        <tr class="table-dark">

            
            
            <th scope="col">Nom</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ferrys as $ferry)
        <tr>
            
            
          
            <td> {{$ferry->nom}}</td>
            <td> <a href="{{route('ferrys.show', $ferry->id)}}" class="btn btn-primary"> Voir</a> </td>
            
            <td> <form action="{{route('ferrys.destroy', $ferry->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>     
           
            
        </td>

         @endforeach
         {{-- <div class="d-flex justify-content-center mt-3">
            <a href="{{route('pdf')}}" class="btn btn-outline-primary">Générer un PDF</a>
        </div> --}}
    </tbody>
</table>
    