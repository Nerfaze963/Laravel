<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des bateaux</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            padding: 10px;
            font-weight: bold;
        }
        td{
            border: 1px solid black;
            padding: 5px; 
        }
    </style>

</head>
<body>
    <h1>{{$titre}}</h1>
    <h3> Date: {{$date}}</h3>
    <p>
        <table>
            <tr>
                <th>Nom</th>
                <th>longueur</th>
                <th>largeur</th>
                <th>vitesse</th>
                <th>equipement</th>
                
            </tr>
            @foreach($ferrys as $ferry)
            <tr>
                <p> {{$ferry->nom}}</p>
                <p> {{$ferry->longueur}}</p>
                <p> {{$ferry->largeur}}</p>
                <p> {{$ferry->vitesse}}</p>
                 <td>{{$equipement->slug}}</td> 

            </tr>
            @endforeach
        </table>
    </p>
</body>
</html>