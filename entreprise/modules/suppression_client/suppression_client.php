<?php

require_once("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
$idUtilisateur = $_GET['idUtilisateur'];
$sql = "INSERT INTO archives SELECT * FROM historique_achat WHERE idUtilisateur = :idUtilisateur ";
try {

    $stmt = $db->prepare($sql);
    $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt == true) {
  
      $msg = "Aucun résultat pour votre recherche";
    }
  
  
    if ($stmt === false) {
      die("Erreur");
    }
  } catch (PDOException $e) {
  }

$sql = "INSERT INTO archives_utilisateur SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur ";
try {

    $stmt = $db->prepare($sql);
    $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt == true) {
  
      $msg = "Aucun résultat pour votre recherche";
    }
  
  
    if ($stmt === false) {
      die("Erreur");
    }
  } catch (PDOException $e) {
  }

$sql = "DELETE FROM historique_achat WHERE `idUtilisateur`=:idUtilisateur";
try {

    $stmt = $db->prepare($sql);
    $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt == true) {
  
      $msg = "Aucun résultat pour votre recherche";
    }
  
  
    if ($stmt === false) {
      die("Erreur");
    }
  } catch (PDOException $e) {
  }

$sql = "DELETE FROM connexion WHERE `idUtilisateur`=:idUtilisateur";
try {

    $stmt = $db->prepare($sql);
    $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt == true) {
  
      $msg = "Aucun résultat pour votre recherche";
    }
  
  
    if ($stmt === false) {
      die("Erreur");
    }
  } catch (PDOException $e) {
  }
$sql = "DELETE FROM utilisateur WHERE `idUtilisateur`=:idUtilisateur";

try {

  $stmt = $db->prepare($sql);
  $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
  $stmt->execute();
  if ($stmt == true) {

    $msg = "Aucun résultat pour votre recherche";
  }


  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
}

?>

<?php

//header('location:http://localhost/fidelizaou/entreprise/home.php');

?>