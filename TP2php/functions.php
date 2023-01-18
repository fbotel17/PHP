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
?>