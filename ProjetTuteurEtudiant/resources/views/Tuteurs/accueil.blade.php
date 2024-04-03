<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Tuteurs</title>
</head>
<body>

<p>Prenom: {{$tuteurs[0]->prenom}}</p>
<p>Nom: {{$tuteurs[0]->nom}}</p>
<p>Matricule: {{$tuteurs[0]->matricule}}</p>
<p>Em@il: {{$tuteurs[0]->email}}</p>
<p>Grade: {{$tuteurs[0]->grade}}</p>
<p>Matiere: {{$tuteurs[0]->matiere}}</p>

</body>
</html>