<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Form Input Orderan Cancel</h4>
            </div>

            <div class="col-12 grid-margin stretch-card mt-2">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="treatment">Nama Treatment</label>
                                <select name="treatment" id="treatment" class="js-example-basic-single w-100">
                                    <option value="">treatment 1</option>
                                    <option value="">treatment 2</option>
                                    <option value="">treatment 3</option>
                                </select>
                                <!-- <input type="text" class="form-control" name="" placeholder=""> -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Tanggal</label>
                                <input type="text" class="form-control" name="" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" style="text-align: center;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 my-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Halaman Order Cancel!</h4>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Daftar Orderan Customer</h4>
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
                                            Tanggal
                                        </th>
                                        <th>
                                            Id Order
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Herman Beck
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Messsy Adam
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                        <td>
                                            $245.30
                                        </td>
                                    </tr>
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