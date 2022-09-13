<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>
<div id="admin-faq" class="container">
    <div class="h3 mb-4">Choose Question</div>
    <div class="box-question row overflow-auto">
        <?php for ($i = 0; $i < 15; $i++) : ?>
            <div class="col-lg-4">
                <div class="form-check">
                    <input class="form-check-input d-none position-absolute" type="radio" name="flexRadioDefault" id="<?= $i; ?>">
                    <label class="form-check-label" for="<?= $i; ?>">
                        <div class="card card-question mx-2 mb-3 shadow">
                            <div class="card-body">
                                <div class="small">
                                    <div class="small text-muted">From <span class="fw-bold">annisazahr.gmail.com</span></div>
                                    <div class="small text-muted">published on may 23 2022</div>
                                </div>
                                <div class="mt-2 fw-bold small">Lorem ipsum dolor sit amet ?</div>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <form action="" method="post">
        <div class="mt-4">
            <div class="h3 mb-4">Answer</div>
            <div class="input-answer">
                <textarea class="form-control border-0 p-4" id="" rows="10" placeholder="write your answer here ..."></textarea>
            </div>
        </div>
        <div>
            <button class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>