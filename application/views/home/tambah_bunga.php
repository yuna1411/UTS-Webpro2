<div class="container-fluid">
    <h3>Halaman Tambah Bunga</h3>
    <hr>
    <br>

    <form method="post" action="<?php echo base_url('Home/proses_tambah'); ?>">
        <div class="row mb-3">
            <label for="kode" class="col-sm-2 col-form-label">Kode Bunga</label>
            <div class="col-sm-2">
            <input type="int" class="form-control" name="kode">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Bunga</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="nama">
            </div>
        </div>

        <div class="row mb-3">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="kategori">
            </div>
        </div>

        <div class="row mb-3">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="jenis">
            </div>
        </div>

        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-2">
            <input type="int" class="form-control" name="harga">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tangkai" class="col-sm-2 col-form-label">Jumlah Tangkai</label>
            <div class="col-sm-1">
            <input type="int" class="form-control" name="tangkai">
            </div>
        </div>

        <div class="row mb-3">
            <label for="warna" class="col-sm-2 col-form-label">Warna Bunga</label>
            <div class="col-sm-5">
            <input type="text" class="form-control" name="warna">
            </div>
        </div>

        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-5">
            <textarea class="form-control" rows="3" name="deskripsi"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <label for="btn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
            <button type="submit" class="btn btn-primary" >Tambah</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>