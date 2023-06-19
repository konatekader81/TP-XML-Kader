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
                        $page_heading = "Ajout de collecte";
                        $back_link = "collecte.php";
                        include('partials/page_heading.php');
                        
                        $indicateurs = all("indicateur");
                    ?>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-sm-12">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-1"></div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="indicateur_id">Indicateur</label>
                                        <select id="indicateur_id" name="indicateur_id" class="form-control" aria-label="Default select example">
                                            <option value=""></option>
                                            <?php foreach($indicateurs as $indicateur): ?>
                                                <option value="<?= $indicateur['id'] ?>"><?= $indicateur['code'].' - '.$indicateur['description'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="frequence">Fréquence</label>
                                        <input type="text" class="form-control" id="frequence" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="zone_reference">Zone de référence</label>
                                        <input type="text" class="form-control" id="zone_reference" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="unite_mesure">Unité de mesure</label>
                                        <input type="text" class="form-control" id="unite_mesure" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="valeur_annee_2019">Valeur 2019</label>
                                        <input type="text" class="form-control" id="valeur_annee_2019" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="valeur_annee_2020">Valeur 2020</label>
                                        <input type="text" class="form-control" id="valeur_annee_2020" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="valeur_annee_2021">Valeur 2021</label>
                                        <input type="text" class="form-control" id="valeur_annee_2021" required>
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

            var indicateur_id = $('#indicateur_id').val();
            var frequence = $('#frequence').val();
            var zone_reference = $('#zone_reference').val();
            var unite_mesure = $('#unite_mesure').val();
            var valeur_annee_2019 = $('#valeur_annee_2019').val();
            var valeur_annee_2020 = $('#valeur_annee_2020').val();
            var valeur_annee_2021 = $('#valeur_annee_2021').val();

            $.ajax({
                url: "./api/collecte/index.php",
                type: "POST",
                data: {
                    indicateur_id: indicateur_id,
                    frequence: frequence,
                    zone_reference: zone_reference,
                    unite_mesure: unite_mesure,
                    valeur_annee_2019: valeur_annee_2019,
                    valeur_annee_2020: valeur_annee_2020,
                    valeur_annee_2021: valeur_annee_2021
                },
                cache: false,
                success: function(data) {
                    window.location.replace("collecte.php")
                }
            })
        })
    </script>

</body>

</html>