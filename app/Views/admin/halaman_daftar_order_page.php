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
                                        <th>
                                            aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($daftar as $item) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $item['nama']; ?></td>
                                            <td><?= $item['nomor_handphone'] ?></td>
                                            <td><?= $item['id_jenis_treatment']; ?></td>
                                            <td><?= $item['tanggal'] ?></td>
                                            <td><?= $item['total_harga'] ?></td>

                                            <td><a href="/admin/halaman_order_complete/store/<?= $item['id'] ?>" class="btn btn-primary">Complete</a></td>
                                            <td><a href="/admin/halaman_order_complete/cancel/<?= $item['id'] ?>" class="btn btn-secondary">Cancel</a></td>
                                            <td><a href="/admin/halaman_order_complete/delete/<?= $item['id'] ?>" class="btn btn-danger">Hapus</a></td>


                                        </tr>
                                    <?php $i++;
                                    endforeach; ?>
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