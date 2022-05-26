<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bunga
            <a href="<?php echo base_url('/home/tambah_bunga'); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Kode</td>
                            <td>Nama</td>
                            <td>Kategori</td>
                            <td>Jenis</td>
                            <td>Harga</td>
                            <td>Jumlah Tangkai</td>
                            <td>Warna</td>
                            <td>Deskripsi</td>
                            <td colspan="2">Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $no = 1;
                        foreach ($bunga as $bng) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $bng['kode']; ?></td>
                                <td><?php echo $bng['nama']; ?></td>
                                <td><?php echo $bng['kategori']; ?></td>
                                <td><?php echo $bng['jenis']; ?></td>
                                <td><?php echo $bng['harga']; ?></td>
                                <td><?php echo $bng['tangkai']; ?></td>
                                <td><?php echo $bng['warna']; ?></td>
                                <td><?php echo $bng['deskripsi']; ?></td>
                                <td>
                                    <a href="" class="badge badge-primary">Update</a>
                                    <a href="" class="badge badge-danger">Delete</a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

 