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
        <td>{{$ferry->nom}}</td>
        <td>{{$ferry->longueur}}</td>
        <td>{{$ferry->largeur}}</td>
        <td>{{$ferry->vitesse}}</td>
        <td>
            @foreach($ferry->equipement as $equipement)
                {{$equipement->libelle}}
            @endforeach
        </td>
    </tr>
@endforeach
        </table>
    </p>
</body>
</html>