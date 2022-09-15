<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="h5 mt-4 mb-4">Add Article</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="">
                <input class="form-control form-control-lg border-0 input-title" type="text" placeholder="add title article here ..">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control border-0 input-textarea" id="exampleFormControlTextarea1" placeholder="add description article here .." rows="5"></textarea>
            </div>
            <div class="mb-4">
                <textarea class="form-control border-0 p-4 is-invalid shadow" id="content-article" placeholder="write article here ..."></textarea>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please add content
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4 border-0">
                <div class="card-body">
                    <div>select category article</div>
                    <select class="form-select border-0 bg-light mt-3">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="card border-0 mb-4">
                <div class="card-body">
                    <div>add files</div>
                    <div class="mb-3 mt-3">
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                </div>
            </div>
            <div class="card border-0 ">
                <div class="card-body">
                    <div>publish date</div>
                    <div class="mb-3 mt-3">
                        <input type="date" class="form-control" id="datepicker" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button class="btn btn-purple text-center w-100 mt-5 mb-5">Publish</button>
    </div>
</div>


<script>
    ClassicEditor
        .create(document.querySelector('#content-article'))
        .catch(error => {
            console.error(error);
        });
</script>

<?= $this->endSection(); ?>