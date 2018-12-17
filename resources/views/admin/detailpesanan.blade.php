<?php
require_once("./../../application/config/database.php");
if($_POST['getDetail']) {
    $id = $_POST['getDetail'];
    $sql = mysqli_query($db, "SELECT * from daftar_paket where id='$id'");
    while ($row = mysqli_fetch_array($sql)){
?>

<div class="card">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="card-body">
                <h4 class="card-title">Barang 1</h4>
                <table id="myTable" class="table table-bordered table-basic">
                    <li><b>Jenis Pakaian :</b> Kaos</li>
                    <li><b>Model Pakaian :</b> Oblong</li>
                    <li><b>Bahan Pakaian :</b> Katun Combed 24s</li>
                    <li><b>Kombinasi Warna :</b> Dua Warna</li>
                    <li><b>MansEt Tangan :</b> Ya</li>
                    <li><b>Sablon :</b> Plastisol</li>
                    <li><b>Jumlah Warna Sablon :</b> 3-4 Warna</li>
                    <li><b>Lokasi Sablon :</b> Depan</li>
                    <li><b>Bordir :</b> 1 Tempat</li>
                    <li><b>Jumlah Kaos :</b> 12 Pcs</li>
                </table>
              </div>
          </div>
          <div class="carousel-item">
            <div class="card-body">
              <h4 class="card-title">Barang 2</h4>
              <table id="myTable" class="table table-bordered table-basic">
                  <li><b>Jenis Pakaian :</b> Raglan</li>
                  <li><b>Model Pakaian :</b> Oblong</li>
                  <li><b>Bahan Pakaian :</b> Katun Combed 24s</li>
                  <li><b>Kombinasi Warna :</b> Dua Warna</li>
                  <li><b>Manset Tangan:</b> Ya</li>
                  <li><b>Sablon :</b> Plastisol</li>
                  <li><b>Jumlah Warna Sablon :</b> 3-4 Warna</li>
                  <li><b>Lokasi Sablon :</b> Depan</li>
                  <li><b>Bordir :</b> 1 Tempat</li>
                  <li><b>Jumlah Kaos :</b> 12 Pcs</li>
              </table>
            </div>
          </div>
        </div>

        </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"> Previous </span>
  </a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <p>Next</p>
  <span class="sr-only"> Next </span>
</a>
