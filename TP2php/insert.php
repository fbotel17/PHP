<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
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

    $requete = "select * from Patient";
    $resultat = $GLOBALS["pdo"]->query($requete);
    //resultat est du coup un objet de type PDOStatement
    $tabPatients = $resultat->fetchALL();
    ?>
    <form action="" method="post">
        <select name="idMedecin">
            <?php
            foreach ($tabMedecins as $Medecin) {
                ?>
                <option value="<?=$Medecin["id"]?>"><?=$Medecin["nom"]." ".$Medecin["prenom"]?>s</option>
                <?php
            }
            ?>
        </select>
        <select name="idPatient">
            <?php
            foreach ($tabPatients as $Patient) {
                ?>
                <option value="<?=$Patient["id"]?>"><?=$Patient["nom"]." ".$Patient["prenom"]?>s</option>
                <?php
            }
            ?>
        </select>
        <input type="datetime-local" name="laDate">
        <input type="submit" value="Saisir une consultation" name="Valider">
    </form>
    
<?php

if(isset($_POST["Valider"])){
    echo "idMedecin = ".$_POST["idMedecin"]." id patient = ".$_POST["idPatient"]." date = ".$_POST["laDate"];
    //COMME J'AI LES 2 ID
    //je fait une requet pour faire un insert into consultation .... value ( 'idmedecin', 'idpatien', 'date')
    $requeteConsultation = "INSERT INTO `Consultation` (`Dateheure`, `idMedecin`, `idPatient`) VALUES ('" .$_POST['laDate'] .  "','"  .$_POST['idMedecin']. "','" .$_POST['idPatient']. "')";
    $result2 = $GLOBALS["pdo"]->query($requeteConsultation);
}

} catch (Exception  $error) {
    echo "error est : ".$error->getMessage();
}



?>
</body>
</html>
