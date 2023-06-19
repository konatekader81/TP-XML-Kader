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
                        $page_heading = "Ajout de catégorie";
                        $back_link = "categorie.php";
                        include('partials/page_heading.php');
                    ?>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-1"></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input class="form-control" name="code" id="code" type="text" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Description</label>
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button id="btn-ajout" class="btn btn-sm btn-primary px-3">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
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
        $('#btn-ajout').on('click', function() {

            var code = $('#code').val();
            var description = $('#description').val();

            $.ajax({
                url: "./api/categorie/index.php",
                type: "POST",
                data: {
                    code: code,
                    description: description
                },
                cache: false,
                success: function(data) {

                    var data = JSON.parse(data);

                    console.log(data);

                    if(data.success) {
                        window.location.replace("categorie.php")
                    }

                }
            })
        })
    </script>

</body>

</html>