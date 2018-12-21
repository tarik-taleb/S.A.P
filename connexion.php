 <!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="connexion.css" />
        <title>S.A.P</title>

    </head>

    <body>

    <?php  
    if(isset($_POST['connexion']))
    {
        $mailconnect = htmlspecialchars($_POST['email']);
        $mdpconnect = sha1(($_POST['pass']));
        if (!empty($mailconnect) AND !empty($mdpconnect)) {
            
        }
        else{
            $erreur = "Tous les champs doivent etre complétés !";
        }
    }
    ?>

    

    <div id="menu">
        <div id = "menu2">
            <a href="home.php"><p>S.A.P</p></a>
            <a href="home.php"><p>Accueil</p></a>
            <a href="connexion.php"><p>Connexion</p></a>
            <a href="inscription.php"><p>Inscription</p></a>
            <a href="contact.php"><p>Contact</p></a>
        </div>
    </div>
    <div id="page">
    <div class="container">
    <section id="content">
        <form method="POST" action="TraitementConnexion.php">
            <h1><p>Login</p></h1>
            <div>
                <input type="text" placeholder="Username" id="username" name="email" />
            </div>
            <div>
                <input type="password" placeholder="Password" id="password"  name="pass"/>
            </div>
            <div>
                <input type="submit" name="connexion" value="Log in" />
                <a href="#">Lost your password?</a>
            </div>
        </form>
    </section>
    </div>
    </div>


<div id="footer">
 
    <p>
    S.A.P Recrutement<br>
    </p>
    </div>
</body>


</html>