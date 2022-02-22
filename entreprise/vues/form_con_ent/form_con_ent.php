<?php
include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/fidelizaou/entreprise/modules/connexion_employer/requete_login_employer.php");
//$password = "Azerty974";
//$passwordHash = password_hash($password, PASSWORD_DEFAULT);
//var_dump($passwordHash);
?>
<body class="form">
<div class="container">
<?= @$msg ?>
<form method="POST" aria-autocomplete="off">
<center><img src="http://localhost/fidelizaou/images/logo4.png" width=250 height=150   class="logo"  /></center>
        <h3 class="titre_conn">Espace Pro</h3>
        <div class="mb-3">
        <input type="text" placeholder="Identifiant" name="Identifiant">
        </div>
        <div class="mb-3">
        <input type="password" placeholder="Mot de passe" name="Mdp">
</div>
<button type="submit" class="btn_conn" name="submitBtnLogin">Connexion</button>
    </form>
</div>