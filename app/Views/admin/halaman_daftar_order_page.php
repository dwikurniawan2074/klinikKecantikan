<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Halaman Daftar Order</h4>
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
                                            Nomor Handphone
                                        </th>
                                        <th>
                                            Jenis Treatment
                                        </th>
                                        <th>
                                            Tanggal
                                        </th>
                                        <th>
                                            Total Harga
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
                                            081289892965
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                        <td>
                                            Rp. 320.000
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
                                            089777856543
                                        </td>
                                        <td>
                                            $245.30
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                        <td>
                                            Rp. 320.000
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
                                            089866547786
                                        </td>
                                        <td>
                                            $138.00
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                        <td>
                                            Rp. 320.000
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            Peter Meggik
                                        </td>
                                        <td>
                                            085899067764
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                        <td>
                                            Rp. 320.000
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
                                            089539976544
                                        </td>
                                        <td>
                                            $ 160.25
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                        <td>
                                            Rp. 320.000
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