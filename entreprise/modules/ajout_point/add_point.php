<?php

include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
$msg = "";
$Civilite = trim($_POST['Civilite']);
$Nom = trim($_POST['Nom']);
$Prenom = trim($_POST['Prenom']);
$Adresse_mail = trim($_POST['Adresse_mail']);
$Numero_tel = trim($_POST['Numero_tel']);
$Date_naissance = trim($_POST['Date_naissance']);
$Code_postal = trim($_POST['Code_postal']);
$Numero_tel = trim($_POST['Numero_tel']);

    $Numero_tel = trim($_POST['Numero_tel']);

    $stmt = $db->prepare("SELECT * FROM utilisateur WHERE Numero_tel=?");
    $stmt->execute([$Numero_tel]); 
    $user = $stmt->fetch();
    if ($user) {
      echo '<div class="alert alert-danger" role="alert">
     Ce numéro de téléphone existe déja.
     <a class="nav-link" href="http://localhost/fidelizaou/entreprise/ajout_client.php">
     <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
     Resumer
 </a>
    </div>';
    } else {

            $sql = "INSERT INTO utilisateur (Nom, Prenom, Adresse_mail, Numero_tel, Date_naissance, Code_postal, Civilite) Values (:Nom, :Prenom, :Adresse_mail, :Numero_tel, :Date_naissance, :Code_postal, :Civilite)";
            try {
            
                $stmt = $db->prepare($sql);
                $stmt->bindValue('Civilite', $Civilite, PDO::PARAM_STR);
                $stmt->bindValue('Nom', $Nom, PDO::PARAM_STR);
                $stmt->bindValue('Prenom', $Prenom, PDO::PARAM_STR);
                $stmt->bindValue('Adresse_mail', $Adresse_mail, PDO::PARAM_STR);
                $stmt->bindValue('Numero_tel', $Numero_tel, PDO::PARAM_STR);
                $stmt->bindValue('Date_naissance', $Date_naissance, PDO::PARAM_STR);
                $stmt->bindValue('Code_postal', $Code_postal, PDO::PARAM_STR);
                $stmt->execute();
                if ($stmt == true) {
        
        $msg = '<div class="alert alert-sucess" role="alert">
       Client ajouter.
       </div>';
        }
        
        
        if ($stmt === false) {
        die("Erreur");
        }
        } catch (PDOException $e) {
        }
        
        
        
    } 
    





?>