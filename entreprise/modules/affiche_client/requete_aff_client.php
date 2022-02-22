<?php

include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");

$sql = "SELECT * FROM historique_achat INNER JOIN utilisateur WHERE historique_achat.`IdUtilisateur` = utilisateur.`IdUtilisateur`";

try {

    //requete
    $stmt = $db->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
}
