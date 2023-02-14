<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("user.php"); ?>
    <title>Exo3</title>
</head>

<body>

    <?php

    $User1 = new user();
    $User1->afficheUser();

    ?>

    <table width=20% border="2px">
        <tr>
            <th>User</th>
        </tr>
        <tr>
            <td>-Nom : String<br>-Prenom : String</td>
        </tr>
        <tr>
            <td>+AfficheUser() : void</td>
        </tr>
    </table>

    <pre>
    require("user.php");

    class user{
        private $nom;
        private $prenom;

        public function afficheUser(){
            echo 'je suis un User';
        }
    }

    $User1 = new user();
    $User1->afficheUser();




    </pre>

</body>

</html>