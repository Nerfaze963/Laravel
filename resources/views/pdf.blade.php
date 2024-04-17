<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des bateaux</title>
    <style>
       
       body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        h3 {
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        td {
            background-color: #fff;
        }
    </style>

</head>
<body>
<h1>{{$titre}}</h1>
<h3>{{$date}}</h3>
<hr />
@foreach($ferrys as $ferry)
<section>
    <h2>{{$ferry->nom}}</h2>
    <img src="images/{{$ferry->photo}}">
    <p>Longueur : {{$ferry->longueur}}m</p>
    <p>Largeur : {{$ferry->largeur}}m</p>
    <p>Vitesse : {{$ferry->vitesse}}noeuds</p>
    <p><u>Liste des équipements </u></p>
    <ul>
        @foreach ($ferry->equipement as $equipement)
            <li>{{$equipement->libelle}}</li>
        @endforeach
    </ul>
</body>
</section>
@endforeach
</html>