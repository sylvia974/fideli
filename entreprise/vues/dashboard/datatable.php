<?php
include("C:/xampp/htdocs/fidelizaou/entreprise/modules/affiche_client/requete_aff_client.php")
?>
<div class="card mb-4">

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               détails 1
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Adresse mail</th>
                                            <th>Numero téléphone</th>
                                            <th>Nombre de point</th>
                                            <th>Date d'achat</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($row['idUtilisateur']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Nom']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Prenom']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Adresse_mail']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Numero_tel']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Nb_point']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Date_achat']); ?></td>
                                            <td>
                                            
                                            <button type="button" class="btn btn-success">Modifier</button>
                                            <a href="http://localhost/fidelizaou/entreprise/modules/suppression_client/suppression_client.php?idUtilisateur=<?php echo htmlspecialchars($row['idUtilisateur']); ?>" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                        <?php
                                        endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>