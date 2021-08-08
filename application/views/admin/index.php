

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text">
                            <h4><b>Profile</b></h4>
                    </div>
                    <hr></hr>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a href="<?= base_url('admin/create') ?>" class="btn btn-success">Tambah</a>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($allprofile as $no => $profil) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no + 1 ?></th>
                                    <td><?= $profil['nama']; ?></td>
                                    <td><?= $profil['tgl_lahir']; ?></td>
                                    <td><?= $profil['gender']; ?></td>
                                    <td><?= $profil['agama']; ?></td>
                                    <td><?= $profil['status']; ?></td>
                                    <td><?= $profil['alamat']; ?></td>
                                    <td><?= $profil['foto']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/edit/' . $profil['id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/hapus/' . $profil['id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    