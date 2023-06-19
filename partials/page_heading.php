<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $page_heading ?></h1>
    <?php if(isset($add_link)): ?>
    <a href="<?= $add_link ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> 
        Ajouter
    </a>
    <?php elseif(isset($back_link)): ?>
    <a href="<?= $back_link ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i> 
        Liste
    </a>
    <?php endif; ?>
</div>