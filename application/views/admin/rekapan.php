<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Rekapan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Penyewa</th>
                                    <th>Nama Barang</th>
                                    <th>Stok</th>
                                    <th>Lama Sewa</th>
                                    <th>Tanggal Sewa dan Waktu</th>
                                    <th>Tanggal Kembali</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rekapan as $br) : ?>
                                <tr>
                                    <th><?= $no++ ?></th>
                                    <th><?= $br->nama_lengkap ?></th>
                                    <th><?= $br->nama_barang ?></th>
                                    <th><?= $br->stok ?></th>
                                    <th><?= $br->lama_sewa ?></th>
                                    <th><?= $br->tgl_sewa ?></th>
                                    <th><?= $br->tgl_kembali ?></th>

                                    <th>

                                        <a href="" class="badge badge-success">edit</a>
                                        <a href="" class="badge badge-danger">delete</a>
                                    </th>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>