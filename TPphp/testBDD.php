<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <form action="" method="post">
        <div>
            <label>Envoyer</label>
            <input type="text" id="name" name="REQUETESQL">
            <input type="submit" name="Envoyer" value="Envoyer">
        </div>
    </form>
    <?php
    
    
    try{
        
        $ipserver = "192.168.64.168";
        $nomBase = "Medecin";
        $loginPrivilege = "siteWeb";
        $passPrivilege = "siteWeb";
        
        
        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . '; dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
        

        if(isset($_POST["Envoyer"])){
            
            $resultat = $GLOBALS["pdo"]->query($_POST["REQUETESQL"]);
            echo "coucou";
            if($resultat -> rowCount()>0){
                while($tab = $resultat->fetch()){
                    echo "le nom est : " . $tab["nom"] . " le prénom est : " . $tab["prenom"]." id : " . $tab["id"]." <br/>";
                }
            }
        }

        

        // echo "coucou1";
        // $resultat = $GLOBALS["pdo"]->query($requete);
        // echo "coucou2";
        // if($resultat -> rowCount()>0){
        //     while($tab = $resultat->fetch()){
        //         echo "le nom est : " . $tab["nom"] . " le prénom est : " . $tab["prenom"]." id : " . $tab["id"]." <br/>";
        //     }
        // }
    
    }
    catch(Exception $error){
       echo "error est : " . $error->getMessage();
       
    }
    
    
    ?>
    
</body>
</html>