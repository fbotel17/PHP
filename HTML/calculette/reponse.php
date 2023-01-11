<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8" />
        <title>
            reponse
        </title>
    </head>
<body>
<h1>bonjour, <?php echo $_GET['nom']?> </h1>
<h1>Vous avez <?php echo $_GET['age']?>ans </h1>
<?php
$n = $_GET['nom'];
$n = $_GET['age'];
?>
votre nom et stoker dans la variable $n
dont le type est <?php echo gettype($n) ?>
<br/><br/>
votre age est stoke dans la variable <b>$a</b>
dont le type est <i><?php echo gettype($a); ?></i>
<br/> On peut la transformer en <i>integer</i> en faisant : <i> settype($a,"integer")</i>
<?php settype($a,"integer"); ?>
<br/><br/>
type de $a : 