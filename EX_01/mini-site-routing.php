<!DOCTYPE html>
<html>
    <head>
        <title>mini-site-routing</title>
        <meta charset="utf-8">
    </head>
    <body>
        <nav class="navigation">
            <ul>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1">Accueil</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=2">Page 1</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=3">Page 2</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion.php?page=connexion">Connexion</a></li>
                <li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/admin.php?page=admin">Admin</a></li>
            </ul>
        </nav>
        <h1>Titre principal</h1>
        <?php
        //Si page 1 affiche Accueil//
        echo (($_GET["page"]=="1") ? ("<h2>Accueil !</h2>") : null);
        //Si page 2 affiche Page 2//
        echo (($_GET["page"]=="2") ? ("<h2>Page 2</h2>") : null);
        //Si page 3 affiche page 3//
        echo (($_GET["page"]=="3") ? ("<h2>Page 3</h2>") : null);
        //Si page connexion affiche connexion//
        echo (($_GET["page"]=="connexion")? ("connexion.php"): null);
        ?>
    </body>
    <footer>
        <?php
        session_start();
        if(isset($_SESSION["id"]))
        {
         echo '<p>Login : ' .$_SESSION["id"]. '</p>';
        }
        elseif(!isset($_COOKIE['id'])){
            $_SESSION['id'] = $_POST['Login'];
            $_SESSION['mdp'] = $_POST['Password'];
        }
        else{
            header("Location:'http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion.php?page=connexion'");
        }
        ?>
    </footer>
</html>