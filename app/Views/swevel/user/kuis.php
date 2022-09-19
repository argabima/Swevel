<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>
<section id="kuis">
    <div class="container">
        <div class="h4 mb-2">Kuis Pemrograman dengan kotlin</div>
        <div>Kuis latihan <span>20 Min</span></div>
        <div class="mt-5">
            There’s a good chance that you enrolled in this certificate program hoping to find work as a UX designer in the near future. UX design is a rapidly changing field with a projected 10-year growth rate of 15% (Burning Glass, 2020). When you check out most job searching sites, you’ll find tens of thousands of job postings for UX-related roles. In fact, recruiters around the world are struggling to fill open positions for UX designers because the demand for people with these skills is outpacing the supply of available UX designers. That’s where you come in!
        </div>

        <div class="mt-5 text-end">
            <a href="" class="btn btn-purple-50 w-150px text-decoration-none">Mulai Kuis</a>
        </div>

        <div class="mt-5 border-top">
            <div class="row">
                <div class="col-6 border-end">Score</div>
                <div class="col-6">Preview</div>
            </div>
        </div>

        <div class="mt-5 pt-5 text-end">
            <a href="#" class="btn btn-outline-purple w-150px me-2 text-purple text-decoration-none">Preview</a>
            <a href="#" class="btn btn-purple w-150px text-decoration-none">Next</a>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>