<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<style>
    .table td img {
        width: 70px;
        height: 40px;
        border-radius: 10%;
        display: block;
        margin-left: auto;
        margin-right: auto;

    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Form Input Treatment</h4>
            </div>

            <div class="col-12 grid-margin stretch-card mt-2">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputName1">Nama Treatment</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Harga</label>
                                <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Gambar Treatment</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-4 mb-2">
                <h4 class="font-weight-bold text-dark">Tabel Data Treatment</h4>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Treatment Yang Disediakan</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Nama Treatment
                                        </th>
                                        <th>
                                            Deskripsi
                                        </th>
                                        <th>
                                            Harga
                                        </th>
                                        <th>
                                            Gambar Treatment
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data as $treatment) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?= $treatment['id']; ?>
                                            </td>
                                            <td>
                                                <?= $treatment['nama_treatment']; ?>
                                            </td>
                                            <td>
                                                <?= $treatment['deskripsi']; ?>
                                            </td>
                                            <td>
                                                <?= $treatment['harga']; ?>
                                            </td>
                                            <td>
                                                <img src="<?= $treatment['gambar_treatment']; ?>" alt="">
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>