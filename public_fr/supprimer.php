<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Supprimer quelque chose</title>
</head>

<body>
    <h1><b class="material-icons">delete</b> Supprimer quelque chose</h1>

    <form action="" method="post">
        <table border="1">
            <tbody>
                <tr>
                    <th><label for="nom">Voulez-vous vraiment supprimer cette chose ?</label></th>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="hidden" name="supprimer_quelquechose" />
                        <input type="hidden" name="id" value="1" />
                        <button type="submit">Supprimer</button>
                        <button type="submit" name="annuler">Annuler</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>