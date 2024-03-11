<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{asset('js/alert.js') }}" defer></script>
    
</head>
<body>
    @yield('contenu')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src={{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}></script>
    

    <style>
       

.card {
    width: 400px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.card-header-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.card img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.content {
    margin-top: 10px;
}

.content p {
    margin-bottom: 5px;
}

ul {
    margin-top: 10px;
    padding-left: 20px;
}

.btn {
    margin-top: 20px;
}




/* css de la page create.blade.php */



/* Styles généraux */
.create-body {
    font-family: Arial, sans-serif;
    background-image: url('https://www.thoughtco.com/thmb/fXGK_2MrtyPlx6kFx1ps9EKUc1w=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-142116239-5b4f993746e0fb00374d54fd.jpg');
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}


.create-container {
    padding: 50px;
}

.create-form {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 90%;
}

.create-group {
    margin-bottom: 20px;
}

.create-label {
    font-weight: bold;
}

.create-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-top: 5px;
    transition: border-color 0.3s ease;
}

.create-input:focus {
    border-color: #007bff;
    outline: none;
}

.create-error-message {
    color: #dc3545;
    font-size: 14px;
}

.is-invalid {
    border-color: #dc3545 !important;
}

.create-checkbox-item {
    margin-bottom: 5px;
}

.create-checkbox-label {
    margin-left: 5px;
}

.create-control {
    margin-top: 10px;
    text-align: center;
}

.create-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.create-btn:hover {
    background-color: #0056b3;
}



/* css de show.blade.php */




.show-body {
    margin: 0;
    padding: 0;
    background-image: url('https://partir.ouest-france.fr/magazine/wp-content/uploads/2022/09/unvgvo2cs7k.jpg');
    background-size: cover;
    background-position: center;
}

.background-image {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Ajustez la hauteur selon vos besoins */
}

.show-card {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto; 
}

.show-card-header {
    text-align: center; 
    margin-bottom: 20px;
}

.show-card-header img {
    max-width: 100%; 
    height: auto; 
    border-radius: 8px; 
}

.show-content {
    text-align: left; 
    margin-bottom: 20px;
}

.show-content p {
    margin: 10px 0; 
}

.show-buttons {
    text-align: center; 
}

.show-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 20px; 
}

.show-btn:hover {
    background-color: #0056b3;
}

    </style>
</body>
</html>