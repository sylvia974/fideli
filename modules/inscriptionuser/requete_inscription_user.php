<?php

require_once("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");

?>

<?php


$Civilite = trim($_POST['Civilite']);
$Nom = trim($_POST['Nom']);
$Prenom = trim($_POST['Prenom']);
$Adresse_mail = trim($_POST['Adresse_mail']);
$Code_postal = trim($_POST['Code_postal']);
$Numero_tel = trim($_POST['Numero_tel']);
$Date_naissance = trim($_POST['Date_naissance']);
$Mdp = trim($_POST['Mdp']);
$confirmationmdp = trim($_POST['confirmationmdp']);

    if (isset($_POST['confirmationmdp'])&&isset($_POST['Mdp']))
    {
        $reponse = $bdd->prepare('INSERT INTO utilisateur(idUtilisateur , Nom, Prenom, Adresse_mail,Numero_tel,Date_naissance,Code_postal,Civilite) VALUES(:Nom, :Prenom, :Adresse_mail, :Code_postal,:Numero_tel,:Date_naissance)') or die(print_r($bdd->errorInfo()));
        $reponse = $bdd->prepare('INSERT INTO connexion(idConnexion, idUtilisteur, Mdp) VALUES(:Mdp)') or die(print_r($bdd->errorInfo()));
 
        $reponse->execute(array(
                        'idUtilisateur' => "",
                        'Civilite' => strip_tags($_POST['Civilite']),
                        'Nom' => strip_tags($_POST['Nom']),
                        'Prenom' => strip_tags($_POST['Prenom']),
                        'Adresse_mail' => strip_tags($_POST['Adresse_mail']),
                        'Code_postal' => strip_tags($_POST['Code_postal']),
                        'Numero_tel' => strip_tags($_POST['Numero_tel']),
                        'Date_naissance' => strip_tags($_POST['Date_naissance']),
                         
                        'idConnexion' => "",
                        'idUtilisateur' => "",
                        'Mdp' => strip_tags($_POST['Mdp']),
                        ));
         
        echo "<b>" .  $_POST['Civilite'] && $_POST['Nom'] . "</b> est  ajouté avec succès !";
        $reponse->closeCursor();
    }

?>
