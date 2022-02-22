<?php

require_once("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");



$idUtilisateur = trim($_POST['idUtilisateur']);
$Civilite = trim($_POST['Civilite']);
$Prenom = trim($_POST['Prenom']);
$Nom = trim($_POST['Nom']);
$Adresse_mail = trim($_POST['Adresse_mail']);
$Numero_tel = trim($_POST['Numero_tel']);
$Date_naissance = trim($_POST['Date_naissance']);
$Code_postal = trim($_POST['Code_postal']);

//UPDATE info_employe SET civilite=:civilite, image=:image_employe, nom=:nom, prenom=:prenom, date_naissance=:date_naissance, adresse_postale=:adresse_postale, num_tel=:num_tel, email=:email, statut_familiale=:statut_familiale, nb_enfant=:nbr_enfant, num_secu=:num_secu, type_contrat=:type_contrat, poste=:poste, fonction=:fonction, affectation=:affectation, niveau_etude=:nvx_etude, permis=:permis, date_entre=:date_entree, statut=:statut, date_fin=:date_fin WHERE `id_matricule`=:id_matricule 

$sql = "UPDATE utilisateur SET Civilite=:Civilite, Prenom=:Prenom, Nom=:Nom, Adresse_mail=:Adresse_mail, Numero_tel=:Numero_tel, Date_naissance=:Date_naissance, Code_postal=:Code_postal WHERE `idUtilisateur`=:idUtilisateur  ";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindValue('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
  $stmt->bindValue('Civilite', $Civilite, PDO::PARAM_STR);
  $stmt->bindValue('Prenom', $Prenom, PDO::PARAM_STR);
  $stmt->bindValue('Nom', $Nom, PDO::PARAM_STR);
  $stmt->bindValue('Adresse_mail', $Adresse_mail, PDO::PARAM_STR);
  $stmt->bindValue('Numero_tel', $Numero_tel, PDO::PARAM_STR);
  $stmt->bindValue('Date_naissance', $Date_naissance, PDO::PARAM_STR);
  $stmt->bindValue('Code_postal', $Code_postal, PDO::PARAM_STR);

  $stmt->execute();
  if ($stmt == true) {

    $msgmodification = '<div class="alert alert-danger" role="alert">
    Modication n est pas pris en compte.
    </div>';
  }


  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
}




?>

<?php
header('location:http://localhost/fidelizaou/info_user.php');
?>