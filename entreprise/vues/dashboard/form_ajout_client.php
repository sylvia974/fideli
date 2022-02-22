<?php
include("C:/xampp/htdocs/fidelizaou/modules/connexiondb/connexiondb.php");
//include("C:/xampp/htdocs/fidelizaou/entreprise/modules/ajout_client/add_client.php");
?>
<!-- Formulaire ajout client -->
<?= @$msg ?>

<form action="http://localhost/fidelizaou/entreprise/modules/ajout_client/add_client.php" method="POST" >
        <select class="form-select" name="Civilite">
            <option selected>Genre</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            <option value="Autre">Autre</option>
        </select>
</br>
        <div class="mb-3">
            <input type="text" class="form-control" name="Nom" placeholder="Nom">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="Prenom"  placeholder="Prenom">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="Adresse_mail" placeholder="Adresse-mail">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="Numero_tel" placeholder="Numero de téléphone">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="Date_naissance" placeholder="Date de naissance">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control"  name="Code_postal"  placeholder="Code Postal">
        </div>
        
      <button type="submit" class="btn btn-primary" name="submitBtnAjout">Ajouter</button>
        
      </form>