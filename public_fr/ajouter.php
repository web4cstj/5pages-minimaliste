<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Ajouter quelque chose</title>
</head>
<body>
    <h1><b class="material-icons">add_circle_outline</b> Ajouter quelque chose</h1>

    <form action="" method="post">
        <table border="1">
            <tbody>
                <tr>
                    <th><label for="nom">Nom</label></th>
                    <td><span><input type="text" name="nom" id="nom" value=""></span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="hidden" name="ajouter_quelquechose"/>
                        <button type="submit">Ajouter</button>
                        <button type="submit" name="annuler">Annuler</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>