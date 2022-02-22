
<body class="form">
<div class="container">
    
<form>
<?php
include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
include("C:/xampp/htdocs/fidelizaou/modules/inscriptionuser/requete_inscription_user.php");
?>
        <h3><img src="images/logo4.png" width=250 height=150 alt="Logo_page" title="Accueil" id="logo"/></h3>
        <h1 class="conn">S'inscrire</h1>
</br>
        <div class="mb-3">
            <select class="select" name="Civilite" id="Civilite">
                    <option value="">--Civilité--</option>
                    <option value="Madame" name="Madame">Mme</option>
                    <option value="Monsieur"name="Monsieur">Mr</option>
                    <option value="Autre"name="Autre">Autre</option>
                </select>

                <input type="text" placeholder="Nom" id="name" name="Nom">

                <input type="text" placeholder="Prénom" id="prenom" name="Prenom">

                <input type="text" placeholder="Email" id="email" name="Adresse_mail">

                <input type="text" placeholder="Code Postale" id="adresse" name="Code_postal">

                <input type="text" placeholder="Téléphone" id="Telephone" name="Numero_tel">

                <input type="text" placeholder="Date de naissance" id="dateDeNaissance" name="Date_naissance">

                <input type="password" placeholder="Mot de passe" id="mdp" name="Mdp">

                <input type="password" placeholder="Confirmer votre mot de passe" id=confirmationmdp" name="confirmationmdp"> 
        </div>
<button type="submit" class="btn btn-primary">S'inscrire</button>
<p class='seConnecter'> <a  href="index.php">Se connecter</a></p>
    </form>
   
</div>