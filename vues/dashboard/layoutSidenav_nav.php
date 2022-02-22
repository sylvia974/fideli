<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Informations:</div>
                            <a class="nav-link" href="http://localhost/fidelizaou/home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Resumer
                            </a>
                            <div class="sb-sidenav-menu-heading">Liste des entreprises:</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                Barber shop
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                Sautron Pneu
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 Marry Lou Design
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 Mado
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                 PRTechnologie Power electronics
                            </a>
                            <div class="sb-sidenav-menu-heading">Paramétres</div>
                            <a class="nav-link" href="http://localhost/fidelizaou/info_user.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Mes Informations personnelle
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Autres informations
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Session de :</div>
                        <?php 
                        echo $_SESSION['sess_user_name']. ' ' .$_SESSION['sess_user_prenom'];
                        ?>
                        <a href="http://localhost/fidelizaou/modules/deconnexion/logout.php"><img class="logo_logout" src="http://localhost/fidelizaou/images/logout.svg"/></a>
                    </div>
                </nav>
            </div>