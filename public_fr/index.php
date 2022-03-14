<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Liste des choses</title>
</head>
<body>
    <h1><b class="material-icons">view_list</b> Liste des choses</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="details.php?id=1">Rita Raté</a></td>
                <td>
                    <a href="details.php?id=1"><b class="material-icons">visibility</b>Détails</a> | 
                    <a href="modifier.php?id=1"><b class="material-icons">edit</b>Modifier</a> | 
                    <a href="supprimer.php?id=1"><b class="material-icons">delete</b>Supprimer</a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td><a href="ajouter.php"><b class="material-icons">add_circle_outline</b>Ajouter</a></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>