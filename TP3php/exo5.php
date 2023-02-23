<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("class/personnage4.php"); ?>
    <title>Exo5</title>
</head>

<body>

    <?php

    

        $J1=new Personnage(3);
        $J1 -> getInfos();


    ?>

    <pre>
    require("class/personnage4.php");

    class personnage{
    private $pseudo;
    private $vie;
    private $id;




    public function __construct($id)
    {

        try {
            // Connexion
            $ipserver = "192.168.65.171";
            $nomBase = "personnage";
            $loginPrivilege = "root";
            $passPrivilege = "root";

            $GLOBALS["PDO"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);



            $requete = "SELECT * FROM personnage WHERE id = $id";
            $affichePersonnage = $GLOBALS["PDO"]->query($requete);

            if ($affichePersonnage != false) {
                $row_count = $affichePersonnage->rowCount();
                if ($row_count > 0) {
                    $perso = $affichePersonnage->fetch();

                    $this->id = $perso["id"];
                    $this->pseudo = $perso["pseudo"];
                    $this->vie = $perso["vie"];
                }
            }
        } catch (Exception $error) // Si erreur
        {
            $error->getMessage();
            echo "Erreur est : " . $error;
        }
    }


    public function getInfos(){
        echo "id : ".$this->id;
        echo "pseudo : ".$this->pseudo;
        echo "vie : ".$this->vie;
    }



    $J1=new Personnage(2);
    $J1 -> getInfos();
    
    </pre>

</body>

</html>