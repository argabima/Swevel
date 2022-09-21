<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-4">
    <div class="h3">Halaman Kontak</div>
    <button type="button" class="btn btn-sm btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addKontak">
        Tambah Kontak
    </button>
    <?php if (session()->getFlashdata('pesan')) :  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <input type="hidden" id="message_add_kontak" value="<?= session()->getFlashdata('error_add_kontak'); ?>">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Group Kontak</th>
                    <th scope="col">Provider</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                foreach ($kontak as $x) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $x['nama']; ?></td>
                        <td><?= $x['nomor']; ?></td>
                        <td><?= $x['group_kontak']; ?></td>
                        <td><?= $x['nama_provider']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#editKontak" onclick="editKontak('<?= $x['id']; ?>','<?= $x['nama']; ?>','<?= $x['nomor']; ?>','<?= $x['group_kontak']; ?>','<?= $x['provider']; ?>')">Edit</b>
                                <form action="kontak/<?= $x['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data ini ?')">Delete</button>
                                </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal Tambah Data-->
<div class="modal fade" id="addKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kontak Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="kontak/save" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama_kontak" class="form-label">Nama Kontak</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama_kontak" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <span class="text-capitalize"><?= $validation->getError('nama'); ?></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor</label>
                        <input type="number" class="form-control <?= ($validation->hasError('nomor')) ? 'is-invalid' : ''; ?>" id="nomor" name="nomor" value="<?= old('nomor'); ?>">
                        <div class="invalid-feedback">
                            <span class="text-capitalize"><?= $validation->getError('nomor'); ?></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="group_kontak" class="form-label">Group Kontak</label>
                        <input type="text" class="form-control <?= ($validation->hasError('group_kontak')) ? 'is-invalid' : ''; ?>" id="group_kontak" name="group_kontak" value="<?= old('group_kontak'); ?>">
                        <div class="invalid-feedback">
                            <span class="text-capitalize"><?= $validation->getError('group_kontak'); ?></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="provider" class="form-label">Provider</label>
                        <select class="form-select <?= ($validation->hasError('provider')) ? 'is-invalid' : ''; ?>" name="provider" id="provider">
                            <option value="">Pilih Provider</option>
                            <option value="1" <?= (old('provider') == 1) ? "selected" : ''; ?>>One</option>
                            <option value="2" <?= (old('provider') == 2) ? "selected" : ''; ?>>Two</option>
                            <option value="3" <?= (old('provider') == 3) ? "selected" : ''; ?>>Three</option>
                        </select>
                        <div class="invalid-feedback">
                            <span class="text-capitalize"><?= $validation->getError('provider'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Data-->
<div class="modal fade" id="editKontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kontak Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="kontak/update" method="post">
                <div class="modal-body">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="edit_id" id="edit_id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kontak</label>
                        <input type="text" class="form-control" id="edit_nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor</label>
                        <input type="number" class="form-control" id="edit_nomor" name="nomor">
                    </div>
                    <div class="mb-3">
                        <label for="group_kontak" class="form-label">Group Kontak</label>
                        <input type="text" class="form-control" id="edit_group_kontak" name="group_kontak">
                    </div>
                    <div class="mb-3">
                        <label for="provider" class="form-label">Provider</label>
                        <select class="form-select" name="provider" id="edit_provider">
                            <?php foreach ($provider as $x) : ?>
                                <option value="<?= $x['id_provider']; ?>"><?= $x['nama_provider']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>