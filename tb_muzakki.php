<?php include('koneksi.php');?>
<?php include('header.php');?>

<div class="container">
 <div class="card-body">
        <h4 class="card-title">Data Muzakki</h4>
        <p class="card-description">
        Data Muzakki
        </p>
        <form method="POST" action="tmuzakki.php">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Muzakki</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="nama_muzakki">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Tanggungan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="jumlah_tanggungan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="keterangan">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="Warga Tetap">Warga Tetap</option>
                        <option value="Warga Sementara">Warga Sementara</option>

                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-inverse-success btn-fw">Add Data</button>
        </form>
    </div>
</div>
