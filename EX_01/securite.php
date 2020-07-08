  <?php
session_start();
    //Variables//
    $lien="<a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion.php?page=connexion'>ici</a>";
    $accueil="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1";
    //Conditions//
    $_SESSION['id'] = $_POST['Login'];
    $_SESSION['mdp'] = $_POST['Password'];
    setcookie("cookie", $_SESSION['id'], time()+3600);
    if(empty($_SESSION['id'])){
        echo "<p>T'a pas l'impression d'avoir oublié un truc ?</p>";
    }
    elseif(empty($_SESSION['mdp'])){
        echo "<p>Tu crois que tu peux accéder au site sans mdp ? T'es bête ou quoi ?</p>";
    }
    elseif($_POST['Password'] == 2020){
        header("Location:$accueil");
        exit();
    }
    else{
        echo "<h1>Mauvais couple identifiant/mot de passe</h1>";
        echo "<p>Cliquez $lien pour revenir sur la page de connexion.";
    }
?>