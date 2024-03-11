<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

@extends('template')
 @section('contenu')

@if(session()->has('info'))
                <div class="alert alert-info alert-dismissible fade show js-alert" role="alert">
                    <strong> {{session('info')}}</strong>
                </div>
@endif
 <h1 class="d-flex justify-content-center " style="color: green">Sicily Lines</h1>

 



  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid rounded-5" src="../images/flashDiapo01.jpg">
                
            </div>

            <div class="carousel-item">
                <img class="img-fluid rounded-5" src="../images/flashDiapo02.jpg">      
            </div>

            <div class="carousel-item">
                <img class="img-fluid rounded-5" src="../images/flashDiapo03.jpg">
                
            </div>
            
        </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
  </div>

 <a class="btn btn-outline-success d-grid gap-2 col-6 mx-auto"   href="{{route('ferrys.index')}}"   style="margin-top: 3%">Voir les bateaux</a> 
</body>
</html>