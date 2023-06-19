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
                        $page_heading = "Catégories";
                        $add_link = "add_categorie.php";
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
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    //recup
                                    $categories = all("categorie");
                                    if(isset($categories) && count($categories)):
                                        foreach($categories as $categorie):
                                    ?>
                                        <tr>
                                            <td><?= $categorie['id'] ?></td>
                                            <td><?= $categorie['code'] ?></td>
                                            <td><?= $categorie['description'] ?></td>
                                            <td>
                                                <a href="#!" class="btn btn-sm btn-dark btn-supprimer">Supprimer</a>
                                            </td>
                                        </tr>
                                    <?php
                                        endforeach;
                                    else: 
                                    ?>
                                        <tr class="text-center bg-light">
                                            <td colspan="4">Aucun enregistrement trouvé</td>
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
                url: './api/categorie',
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