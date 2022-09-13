<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h3 class="mt-3 mb-3">Daftar Movie</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="input-search" placeholder="Cari movie" aria-label="Cari movie" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-search">Cari</button>
            </div>
        </div>
    </div>
    <hr>
    <div id="list-movie" class="row">
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detailMovie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>