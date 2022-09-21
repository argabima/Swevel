<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <?= $this->include('swevel/navbar'); ?>
    <?= $this->include('swevel/training/page_first'); ?>
    <?= $this->include('swevel/training/training'); ?>    
    <?= $this->include('swevel/homepage/footer'); ?>
    <?= $this->include('swevel/training/footer'); ?>
<?= $this->endSection(); ?>