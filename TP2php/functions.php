<?php 
function tab($tab)
{
    ?>
    <table border='1px'>
    <?php
        for($i=0; $i<4; $i++)
        {
            ?>
            <tr>
            <?php 
            echo "<td align='center'>".$tab['NOM'][$i]."</td>";
            echo "<td align='center'>".$tab['PRENOM'][$i]."</td>";
            ?>
            </tr>
            <?php


        }
    ?>
    </table>
    <?php
}


function tab2($tab, $nom, $prenom, $age) 
{
    ?>
    <table border='1px'>
    <?php
    echo "<td align='center'>".$nom."</td>";
    echo "<td align='center'>".$prenom."</td>";
    echo "<td align='center'>".$age."</td>";
        for($i=0; $i<4; $i++)
        {
            ?>
            <tr>
            <?php 
            echo "<td align='center'>".$tab['NOM'][$i]."</td>";
            echo "<td align='center'>".$tab['PRENOM'][$i]."</td>";
            echo "<td align='center'>".$tab['AGE'][$i]."</td>";
            ?>
            </tr>
            <?php


        }
    ?>
    </table>
    <?php
}

function tab3($note)
{
    ?>
    <table border='1px'>
    <?php
    echo "<td align='center'>Notes :</td>";
    foreach($note as $value)
        {
            ?>
            <tr>
            <?php 
            echo "<td align='center'>".$value."</td>";
            ?>
            </tr>
            <?php


        }
    ?>
    </table>
    <?php
}

function moyenne($note)
{
    $somme = 0;
    $compteur = 0;
    foreach($note as $value)
    {
        $somme+=$value;
        $compteur += 1;
    }
    $somme = $somme / $compteur;

    return $somme;
}

function formulaireConnexion($MotDePasse)
{
    if(isset($_POST["Deconnexion"]))
    {  
        session_destroy();
        session_unset();

}