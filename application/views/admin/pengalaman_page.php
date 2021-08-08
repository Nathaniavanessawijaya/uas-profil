

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="text">
                            <h4><b>Pengalaman Kerja</b></h4>
                    </div>
                    <hr></hr>
                    <div class="row mt-3">
                        <div class="col-3">
                            <a href="<?= base_url('admin/pengalaman_create') ?>" class="btn btn-success">Tambah</a>
                        </div>
                    </div>

                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tempat</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($allpengalaman as $no => $pekerjaan) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no + 1 ?></th>
                                    <td><?= $pekerjaan['nama_tempat']; ?></td>
                                    <td><?= $pekerjaan['jabatan']; ?></td>
                                    <td><?= $pekerjaan['masa_jabatan']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/pengalaman_edit/' . $pekerjaan['pekerjaan_id']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/pengalaman_hapus/' . $pekerjaan['pekerjaan_id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    