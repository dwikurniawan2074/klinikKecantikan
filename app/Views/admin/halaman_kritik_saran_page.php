<?= $this->extend('templates/sidebar_menu'); ?>

<?= $this->section('content'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Halaman Kritik Saran</h4>
            </div>

            <div class="col-lg-12 mt-2 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Kritik & Saran</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Nama User
                                        </th>
                                        <th>
                                            Kritik dan Saran
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kritik_saran as $item): ?>
                                    <tr>
                                        <td><?= $item['nama_lengkap'] ?></td>
                                        <td><?= $item['deskripsi'] ?></td>
                                        <td><a href="/admin/delete/kritik_saran/<?= $item['id'] ?>" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                    <?php endforeach;?>
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