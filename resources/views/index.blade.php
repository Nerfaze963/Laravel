<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les Ferrys</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://source.unsplash.com/1600x900/?sicily,ferry') center/cover no-repeat fixed;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px;
        }

        .form-container,
        .table-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .btn-primary,
        .btn-outline-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover,
        .btn-outline-primary:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            color: #333;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        td {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 7px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="form-container">
        <h1>Les Ferrys</h1>
        <form action="{{ route('ferrys.create') }}">
            @csrf
            <button class="btn btn-danger">Ajouter</button>
        </form>
        <div class="mt-3">
            <a href="{{ route('pdf') }}" class="btn btn-outline-primary">Générer un PDF</a>
        </div>
    </div>

    <div class="table-container">
        <h2>Liste des Ferrys</h2>
        <table class="table mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ferrys as $ferry)
                    <tr>
                        <td>{{ $ferry->nom }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('ferrys.show', $ferry->id) }}" class="btn btn-primary me-2">Voir</a>
                                <form action="{{ route('ferrys.destroy', $ferry->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
