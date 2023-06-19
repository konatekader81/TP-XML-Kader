<!DOCTYPE html>
<html lang="en">

<?php include('partials/head.php') ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('partials/sidebar.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('partials/navbar.php') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php
                        $page_heading = "Collectes";
                        $add_link = "add_collecte.php";
                        include('partials/page_heading.php');
                    ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-1"></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-stripped table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Indicateur</th>
                                            <th>Fréquence</th>
                                            <th>Zone référence</th>
                                            <th>Unité de mesure</th>
                                            <th>2019</th>
                                            <th>2020</th>
                                            <th>2021</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //recup
                                    $collectes = all("collecte");
                                    if(isset($collectes) && count($collectes)):
                                        foreach($collectes as $collecte):
                                    ?>
                                        <tr>
                                            <td><?= $collecte['id'] ?></td>
                                            <td><?= $collecte['indicateur_code'] ?></td>
                                            <td><?= $collecte['frequence'] ?></td>
                                            <td><?= $collecte['zone_reference'] ?></td>
                                            <td><?= $collecte['unite_mesure'] ?></td>
                                            <td><?= $collecte['valeur_annee_2019'] ?></td>
                                            <td><?= $collecte['valeur_annee_2020'] ?></td>
                                            <td><?= $collecte['valeur_annee_2021'] ?></td>
                                            <td>
                                                <a href="#!" class="btn btn-sm btn-dark btn-supprimer">Supprimer</a>
                                            </td>
                                        </tr>
                                    <?php
                                        endforeach;
                                    else: 
                                    ?>
                                        <tr class="text-center bg-light">
                                            <td colspan="9">Aucun enregistrement trouvé</td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('partials/footer.php') ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include('partials/script.php') ?>

    <script>
        $(document).on('click', '.btn-supprimer', function() {
            
            var row = $(this).closest('tr');
            var ID = row.find('td:first').text()

            $.ajax({
                url: './api/collecte',
                method: 'DELETE',
                data: {
                    id: ID,
                },
                cache: false,
                success: function(response) {
                    window.location.reload()
                }
            });

        });
    </script>

</body>

</html>