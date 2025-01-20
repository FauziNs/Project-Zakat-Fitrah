<?php
include('koneksi.php');
include('header.php');
$id = $_REQUEST['id_muzakki'];
$muzakki = mysqli_query($koneksi, "SELECT * FROM muzakki where id_muzakki = $id");
$m = mysqli_fetch_array($muzakki);
?>


<div class="container">
 <div class="card-body">
        <h4 class="card-title">Distribusi</h4>
        <p class="card-description">
        Distribusi Warga
        </p>
        <form method="POST" action="tdwarga.php">
            <input type="hidden" name="id_muzakki" value="<?= $m['id_muzakki']; ?>">
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" value="<?= $m['nama_muzakki']; ?>" class="form-control" id="inputText3" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="fakir">Fakir</option>
                        <option value="miskin">Miskin</option>
                        <option value="mampu">Mampu</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="hak">
                </div>
            </div>


            <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
        </form>
    </div>
</div>
