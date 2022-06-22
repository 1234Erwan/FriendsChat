<?php session_start();?>
<!DOCTYPE html>
<HTML>
    <head>
        <title>FriendsChat</title>
    </head>
    <body>

    <h1>Bienvenue sur votre profil</h1>
    <?php

    if(isset($_SESSION['email']) && (isset($_SESSION['date'])))
{

    ?>

    <p>Votre Email : <?= $_SESSION['email']; ?> <p>
    <p>Votre date : <?= $_SESSION['date']; ?> </p>

    <?php


}else{
    echo "Veuillez vous connectez à votre compte";
}

    include 'includes/database.php'

    ?>
    

        <h1>Login</h1>
        <form method="post">
            <input type="email" name="lemail" id="lemail" placeholder="Votre Email" required><br/>
            <input type="password" name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required><br/>
            <input type="submit" name="formlogin" id="formlogin" value="Login">
        </form>

        <?php include 'includes/login.php'; ?>       

        <h1>Signin<h1>
        <form method="post">
            <input type="email" name="semail" id="semail" placeholder="Votre Email" required><br/>
            <input type="password" name="password" id="password" placeholder="Votre Mot de passe" required><br/>
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirmer votre Mot de passe" required><br/>
            <input type="submit" name="formsend" id="formsend" value="Signin">
        </form>

        <?php include 'includes/signin.php'; ?>

    </body>
</HTML>