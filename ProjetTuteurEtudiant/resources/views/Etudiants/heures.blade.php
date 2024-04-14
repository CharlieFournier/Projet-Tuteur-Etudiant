<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Étudiants</title>

    <style>
        table {
            margin: auto; /* Aligning the table to the center */
            width: 80%; /* Adjust as needed */
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>


</head>
<body>
<div class="container-fluid h-100" >
    <div class="row text-center">
        <div class="col-md-2 h-100">
        </div> 
        <div class="col-md-8 h-100">
            <div class="row h-100">
                <div class="col-md-6 text-start">
                    <h1> Bonjour |Etudiant| </h1>
                </div>
                <div class="col-md-6 text-end">
                    <h5> Heure disponible: 00h </h5>
                </div>

                <div class="pt-5">
                    <h1><u>Liste des rendez-vous</u></h1>
                <!-- ||||||||||||||||||||||||||||||||||||||||||||| -->
                <table>
    <thead>
        <tr>
            <th>Nom du tuteur</th>
            <th>Date</th>
            <th>Nombre d'heures</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Alexandra Jaques</td>
            <td>2024-01-09</td>
            <td>1.3</td>
        </tr>
        <tr>
            <td>Bernard Tortue</td>
            <td>2023-11-26</td>
            <td>2</td>
        </tr>
    </tbody>
</table>
<!-- ||||||||||||||||||||||||||||||||||||||||||||| -->

                </div>

            </div>
        </div>
        <div class="col-md-2 h-100">
        </div> 
    </div>
</div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>