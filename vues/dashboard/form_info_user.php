<?php
include("C:/xampp/htdocs/gestion_stock/modules/connexiondb/connexiondb.php");
include('C:/xampp/htdocs/fidelizaou/modules/info_user.php/requete_info_user.php');
?>


<?php $row = $stmt->fetch(PDO::FETCH_ASSOC) ?>
<form action="http://localhost/fidelizaou/modules/modification/modification_user.php" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
    <input type="hidden" name="idUtilisateur" class="form-control" value="<?php echo htmlspecialchars($row['idUtilisateur']); ?>" />
    <!-- Email input -->
    <div class="form-outline mb-4">
    <input type="text" name="Civilite" class="form-control" value="<?php echo htmlspecialchars($row['Civilite']); ?>" />
    <label class="form-label" for="form6Example5">Civilite</label>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="Prenom"  class="form-control" value="<?php echo htmlspecialchars($row['Prenom']); ?>" />
        <label class="form-label" for="form6Example1">Prenom</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="Nom" class="form-control" value="<?php echo htmlspecialchars($row['Nom']); ?>" />
        <label class="form-label" for="form6Example2">Nom</label>
      </div>
    </div>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="email" name="Adresse_mail" class="form-control" value="<?php echo htmlspecialchars($row['Adresse_mail']); ?>" />
    <label class="form-label" for="form6Example3">Adresse mail</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" name="Numero_tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" class="form-control" value="<?php echo htmlspecialchars($row['Numero_tel']); ?>" />
    <label class="form-label" for="form6Example4">Numero de téléphone</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="date" name="Date_naissance" class="form-control" value="<?php echo htmlspecialchars($row['Date_naissance']); ?>" />
    <label class="form-label" for="form6Example5">Date de naissance</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input type="text" name="Code_postal"  class="form-control" value="<?php echo htmlspecialchars($row['Code_postal']); ?>" />
    <label class="form-label" for="form6Example6">Code Postale</label>
  </div>

  <!-- Submit button -->
  <center><button type="submit" class="btn btn-primary btn-block mb-4" name="submitBtnModifier">Modifier</button></center>
</form>
