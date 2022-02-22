<body class="sb-nav-fixed">
        <?php
            include('nav.php');
        ?>
        <div id="layoutSidenav">
        <?php
            include('layoutSidenav_nav.php');
        ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Inscription client</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Formumlaire</li>
                        </ol>

                        <?php
                            //include('cards.php');
                            //include('area_bar.php');
                            include('form_ajout_client.php');
                        ?>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
