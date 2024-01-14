<?= $this->extend('layouts/base_layout'); ?>

<?= $this->section('title'); ?>
Activation
<?= $this->endSection(); ?>

<?= $this->section('content') ;?>
 <?= $this->include('partials/inc_navbar') ;?>
<style> 
main{
   height: 100vh;
}
</style>

    <main class="container">
        <div class="row">
            <div class="col p-5 text-center">
                <?php if (!empty(session()->getFlashdata('expiredlink'))) : ?>
                    <!-- expired link -->
                    <p class="fs-1 fw-bold text-danger"><i class="fa-regular fa-circle-xmark"></i>
                        <?= session()->getFlashdata('expiredlink'); ?></p>
                <?php elseif (!empty(session()->getFlashdata('activatedlink'))) : ?>
                    <!-- activated link -->
                    <p class="fs-1 fw-bold text-success"><i class="fa-regular fa-circle-check"></i>
                    <?= session()->getFlashdata('activatedlink'); ?></p>
                <?php else : ?>
                    <!-- link sent -->
                    <p class="fs-1 fw-bold text-primary"><i class="fa-regular fa-paper-plane"></i> 
                    <?= isset($linksent)?$linksent:'' ;?></p>
                <?php endif ?>
                
                <?php if (empty(session()->getFlashdata('expiredlink')) && empty(session()->getFlashdata('activatedlink'))) : ?>
                    <p class="fs-1 fw-bold ">
                        <a class="text-info-emphasis text-decoration-none" href="https://mail.google.com/mail/">
                            <i class="fa-regular fa-envelope-open"></i>
                            Launch Gmail</a></p>
                <?php endif ?>
            </div>
        </div>
    </main>
<?= $this->endSection() ;?>
