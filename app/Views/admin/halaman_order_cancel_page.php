<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
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
                                            Nama
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
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            John Richards
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                        <td>
                                            $138.00
                                        </td>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            Peter Meggik
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
                                            5
                                        </td>
                                        <td>
                                            Edward
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                        <td>
                                            $ 160.25
                                        </td>

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