<?php
include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/fidelizaou/modules/connexionuser/requete_login_utilisateur.php");
//$password = "toto";
//$passwordHash = password_hash($password, PASSWORD_DEFAULT);
//var_dump($passwordHash);
?>
<body class="form">
<div class="container">
<?= @$msg ?>
<form method="POST" aria-autocomplete="off">
<center><img src="http://localhost/fidelizaou/images/logo4.png" width=250 height=150   class="logo"  /></center>
        <h3 class="titre_conn">Espace personnel</h3>
        <div class="mb-3">
        <input type="text" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="numero téléphone" name="Numero_tel">
        </div>
        <div class="mb-3">
        <input type="password" placeholder="Mot de passe" name="Mdp">
</div>
<button type="submit" class="btn_conn" name="submitBtnLogin">Connexion</button>
    </form>
</div>