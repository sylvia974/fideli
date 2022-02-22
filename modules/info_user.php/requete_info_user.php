<?php

require_once("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");

$idUtilisateur = $_SESSION['sess_user_id'] ;

$sql = " SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur";

try {

    //requete
    $stmt = $db->prepare($sql);
    $stmt->bindParam('idUtilisateur', $idUtilisateur, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
