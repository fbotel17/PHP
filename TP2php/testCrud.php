<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>test Crud</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php 

    $ipserver ="192.168.65.171";
    $nomBase = "messagerie";
    $loginPrivilege ="root";
    $passPrivilege ="root";

try {

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    if(isset($_POST["MessageSubmit"])){
        if(!empty($_POST["nom"]) && !empty($_POST["prenom"])){

            $Nom = $_POST["nom"];
            $Prenom = $_POST["prenom"];

            $requete = "INSERT INTO `Message` (`nom`, `prenom`) VALUES ('" . $Nom . "' , '" . $Prenom . "')";
            $req = $GLOBALS["pdo"]->query($requete);

            if($req){
                if ($req->errorCode() == '00000') {
                    echo "Réussite de l'envoie du message";
                }
                
            }

        }
    }

} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}



?>

<form action="" method="post" class="formAjout">
    <div class="form-example">
        <label for="nom"> Nom : </label>
        <input type="text" name="nom" required> 
    </div>
    <div class="form-example">
        <label for="prenom"> Prenom : </label>
        <input type="text" name="prenom" required> 
    </div>
    <div class="form-example">
        <input type="submit" name="MessageSubmit" value="Ajouter un Medecin" class="btsAjout"> 
    </div>
</form>

</body>
</html>
