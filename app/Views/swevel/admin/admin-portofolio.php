<style>
    #portfolio #portfolioImg .col-12 {
        margin-bottom: 0.5rem;
        padding-top: 0;
        padding-bottom: 0;
        padding-right: 0.25rem;
        padding-left: 0.25rem;
    }

    #portfolio #inputfile {
        background-color: #ddd;
        color: #000;
        font-weight: 600;
        letter-spacing: 1px;
    }

    #portfolio input[type="date"] {
        background-color: #ddd;
        color: #000;
        letter-spacing: 3px;
    }
</style>
<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <h3>Portfolio</h3>
        <div id="portfolioImg" class="col-sm-12 mt-3 col-md-8">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <div class="row">
                        <h5 class="my-3">Review Portfolio</h5>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>
                        <div class="col-12 col-md-4">
                            <img src="../asset/image/event/card2.png" class="w-100" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4 mt-3 p-0">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="my-3">Add Files</h5>
                                <div class="input-group input-group-sm">
                                    <button id="inputfile" class="btn btn-sm rounded shadow-none btn-secondary opacity-50">choose from files</button>
                                    <input type="file" class="form-control d-none" id="formfile" accept="image/*">
                                </div>
                                <code class="my-3 text-danger">*required only jpg,jpeg</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- <div class="row"> -->
                                <h5>Publish Date</h5>
                                <input id="datt" type="date" class="form-control my-3">
                                <!-- <div id="datepicker" class="input-group"></div> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-purple my-5 w-100" type="button">Publish</button>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datepicker').datepicker();
        $('#inputfile').click(function() {
            $('#formfile').click();
        });
    });
</script>

<?= $this->endSection(); ?>