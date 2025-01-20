<?php include('koneksi.php');?>
<?php include('header.php');?>

<div class="container">
 <div class="card-body">
        <h4 class="card-title">Mustahik</h4>
        <p class="card-description">
        Data Mustahik
        </p>
        <form method="POST" action="tmustahik.php">
            <div class="row mb-3">
                <label for="inputSelect" class="col-sm-2 col-form-label">Nama Kategori</label>
                <div class="col-sm-10">
                    <select class="form-control" aria-label=".form-select-lg example" id="inputSelect" name="nama_kategori">
                        <option hidden selected>Pilih Kategori</option>
                        <option value="Fakir">Fakir</option>
                        <option value="Miskin">Miskin</option>
                        <option value="mampu">Mampu</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>
                        <option value="Amil">Amil</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Hak</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" name="jumlah_hak">
                </div>
            </div>


            <button type="submit" class="btn btn-inverse-success btn-fw">Submit</button>
        </form>
    </div>
</div>
