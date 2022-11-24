<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
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
   
                                   <?php $no = 1;foreach ($daftar as $item):?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $item['nama'] ?></td>
                                        <td><?= $item['tanggal'] ?></td>
                                        <td><?= $item['id'] ?></td>
                                    </tr>
                                   <?php $no++; endforeach;?>

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