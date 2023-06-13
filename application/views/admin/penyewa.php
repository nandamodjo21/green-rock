<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Penyewa</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                    <th>Password</th>
                                    <th>Nomor HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($penyewa as $br) : ?>
                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <th><?= $br->nama ?></th>
                                        <th><?= $br->email ?></th>
                                        <th><?= $br->alamat ?></th>
                                        <th><?= $br->foto_ktp ?></th>
                                        <th><?= $br->password ?></th>
                                        <th><?= $br->no_hp ?></th>
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