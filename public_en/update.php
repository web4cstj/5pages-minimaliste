<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Modifier quelque chose</title>
</head>

<body>
    <h1><b class="material-icons">edit</b> Modifier quelque chose</h1>

    <form action="" method="post">
        <table border="1">
            <tbody>
                <tr>
                    <th><label for="nom">Nom</label></th>
                    <td><span><input type="text" name="nom" id="nom" value="Rita Raté"></span></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">
                        <input type="hidden" name="modifier_quelquechose" />
                        <input type="hidden" name="id" value="1" />
                        <button type="submit">Modifier</button>
                        <button type="submit" name="annuler">Annuler</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>