<?php
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
        echo "<p>id : ".$this->id;
        echo "</p><p>pseudo : ".$this->pseudo;
        echo "</p><p>vie : ".$this->vie;
    }


}
?>