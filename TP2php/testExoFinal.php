<?php session_start(); ?>
<!DOCTYPE html>
<body>
    <?php 
    if(isset($_POST['disconnect']))
    {
        session_unset();
        session_destroy();
    }
    if(isset($_POST['connect']) && $_POST['login']=="test" && $_POST['password']=="test")
    {
        echo "vous etes connecté";
        ?>
        <form method="post" action="">
            <input type="submit" name="disconnect" value="deconnexion"></input>
        </form>
        <?php
    } 
    else
    {
        ?>
        <form method="post" action="">
            <label>Login : </label>
            <input type="text" name="login"></input>
            <label>Password : </label>
            <input type="password" name="password"></input>
            <input type="submit" name="connect"></input>
        </form>
        <?php
        if(isset($_POST['connect']))
        {
            if($_POST['login']!="test")
            {
                echo "login incorrect";
            }
            else if($_POST['login']=="test" && $_POST['password']!="test")
            {
                echo "password incorrect";
            }
        }
    }
    ?>
</body>