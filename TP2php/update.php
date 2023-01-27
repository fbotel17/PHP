<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Update</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>


<?php 



try {

    $ipserver ="192.168.65.171";
    $nomBase = "medecin";
    $loginPrivilege ="root";
    $passPrivilege ="root";

    $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    $requete = "select * from Medecin";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabMedecins = $resultat->fetchALL();

    $requete1 = "select * from Secretaire";
    $resultat = $GLOBALS["pdo"]->query($requete1);
    //resultat est du coup un objet de type PDOStatement
    $tabSecretaire = $resultat->fetchALL();
    ?>
    <form action="" method="post">
        <select name="idMedecin">
            <?php
            foreach ($tabMedecins as $Medecin) {
                ?>
                <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <select name="idSecretaire">
            <?php
            foreach ($tabSecretaire as $Secretaire) {
                ?>
                <option value="<?=$Secretaire["id"]?>"><?=$Secretaire["nom"]." ".$Secretaire["prenom"]?></option>
                <?php
            }
            ?>
        </select>
        <input type="submit" value="Attribuer secretaire a medecin" name="Valider">
    </form>
    
<?php

if(isset($_POST["Valider"])){
    echo "idMedecin = ".$_POST["idMedecin"]." id secretaire = ".$_POST["idSecretaire"];
    //COMME J'AI LES 2 ID
    //je fait une requet pour faire un insert into consultation .... value ( 'idmedecin', 'idpatien', 'date')
    $requeteChangeSecretaire = "UPDATE `Medecin` SET `idSecretaire` = ".$_POST["idSecretaire"]." WHERE `id` = " .$_POST["idMedecin"];
    $result2 = $GLOBALS["pdo"]->query($requeteChangeSecretaire);
}

} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}



?>
</body>
</html>
