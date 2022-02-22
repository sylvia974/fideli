<?php
$msg = "";
if (isset($_POST['submitBtnLogin'])) {
  $Identifiant = trim($_POST['Identifiant']);
  $Mdp = trim($_POST['Mdp']);



  if ($Identifiant != "" && $Mdp != "") {
    try {

        //SELECT * FROM `connexion` as connexion JOIN utilisateur as utilisateur ON ( connexion.`IdUtilisateur` = utilisateur.`IdUtilisateur` ) WHERE utilisateur.Numero_tel='0693332683'and connexion.Mdp='1234';
      $query = "SELECT * FROM gestion_employer WHERE Identifiant=:Identifiant";
      $stmt = $db->prepare($query);
      $stmt->bindParam('Identifiant', $Identifiant, PDO::PARAM_STR);
      $stmt->execute();
      $count = $stmt->rowCount();
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($count == 1 && !empty($row)) {
        $passwordHash = $row['Mdp'];
        if(password_verify($Mdp, $passwordHash)){
/******************** Your code ***********************/
            $_SESSION['sess_user_id'] = $row['IdGestionEmployer'];
            $_SESSION['sess_user_Role'] = $row['Role'];
            $_SESSION['sess_user_nom'] = $row['Nom_employer'];
            $_SESSION['sess_user_mdp'] = $row['Mdp'];
            $_SESSION['sess_user_identifiant'] = $row['Identifiant'];
            //setcookie('employer', $_SESSION['sess_user_id'],$_SESSION['sess_user_Role'],$_SESSION['sess_user_nom'],$_SESSION['sess_user_identifiant'], time() + 60 * 60 * 24);
            header('location:http://localhost/fidelizaou/entreprise/modules/connexion_employer/loader_employer.php');
        }else{
          $msg = '<div class="alert alert-danger" role="alert">
          Numéro ou mot de passe incorrect
      </div>';
        }
        
      } else {
        $msg = '<div class="alert alert-danger" role="alert">
            Numéro ou mot de passe incorrect
        </div>';
      }
    } catch (PDOException $e) {
      echo "Error : " . $e->getMessage();
    }
  } else {
    $msg = "Remplir les champs requis!";
  }
}
