<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@extends('template')
@section('contenu')

@if(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show js-alert" role="alert">
        <strong>{{ session('info') }}</strong>
    </div>
@endif

<h1 class="text-center" style="color: green">Sicily Lines</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../images/flashDiapo01.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/flashDiapo02.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../images/flashDiapo03.jpg" alt="Third slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target=".carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target=".carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<a class="btn btn-outline-success d-grid gap-2 col-6 mx-auto" href="{{ route('ferrys.index') }}" style="margin-top: 3%">Voir les bateaux</a>

<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
