<?php include('functions.php') ?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TP - XML</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_categorie"
            aria-expanded="true" aria-controls="menu_categorie">
            <i class="fas fa-fw fa-cog"></i>
            <span>Catégories</span>
        </a>
        <div id="menu_categorie" class="collapse" aria-labelledby="heading_categorie" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="categorie.php">Liste</a>
                <a class="collapse-item" href="add_categorie.php">Ajouter</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_sous_categorie"
            aria-expanded="true" aria-controls="menu_sous_categorie">
            <i class="fas fa-fw fa-cog"></i>
            <span>Sous catégories</span>
        </a>
        <div id="menu_sous_categorie" class="collapse" aria-labelledby="heading_sous_categorie" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="sous_categorie.php">Liste</a>
                <a class="collapse-item" href="add_sous_categorie.php">Ajouter</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_indicateur"
            aria-expanded="true" aria-controls="menu_indicateur">
            <i class="fas fa-fw fa-cog"></i>
            <span>Indicateur</span>
        </a>
        <div id="menu_indicateur" class="collapse" aria-labelledby="heading_indicateur" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="indicateur.php">Liste</a>
                <a class="collapse-item" href="add_indicateur.php">Ajouter</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu_collecte"
            aria-expanded="true" aria-controls="menu_collecte">
            <i class="fas fa-fw fa-cog"></i>
            <span>Collecte</span>
        </a>
        <div id="menu_collecte" class="collapse" aria-labelledby="heading_collecte" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="collecte.php">Liste</a>
                <a class="collapse-item" href="add_collecte.php">Ajouter</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->