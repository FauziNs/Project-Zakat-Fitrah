<?php
include('koneksi.php');
include('header.php');
?>


<div class="container">
 <div class="card-body">
        <h4 class="card-title">Distribusi</h4>
        <p class="card-description">
        Distribusi Warga
        </p>
        <form method="POST" action="tdlainnya.php">
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputText3" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="kategori">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="mualaf">Mualaf</option>
                        <option value="fisabilillah">Fisabilillah</option>
                        <option value="ibnusabil">Ibnu Sabil</option>
                        <option value="amil">Amil</option>
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
