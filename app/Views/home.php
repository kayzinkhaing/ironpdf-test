<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid p-0">

    <?= view('partials/_nav', ['navigation' => $navigation]); ?>
    <?= view('partials/_hero', [
        'hero' => $hero,
        'primary_cta' => $primary_cta
    ]); ?>
    <?= view('partials/_features', ['features' => $features]); ?>
    <?= view('partials/_why_section', ['why' => $why_section]); ?>
    <?= view('partials/_early_access', [
        'early_access' => $early_access,
        'footer_cta' => $footer_cta
    ]); ?>


</div>

<?= $this->endSection(); ?>