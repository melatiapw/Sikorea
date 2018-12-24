<?php foreach ($keranjang as $cart): ?>
  <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="detailPesananModal{{$cart->id}}">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Detail Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <div id="detailBarang" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <?php $index = -1; ?>
                              <?php foreach ($pesanan as $order): ?>
                                <?php if ($order->cart_id == $cart->id): ?>
                                  <?php $index++; ?>
                                  <?php if ($index==0): ?>
                                    <div class="carousel-item active">
                                        <div class="card-body">
                                          <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                          <table id="myTable" class="table table-bordered table-basic">
                                            <li><b>Jenis Pakaian :</b> {{$order->nama_jenis_pakaian}}</li>
                                            <li><b>Model Pakaian :</b> {{$order->nama_model}}</li>
                                            <li><b>Bahan Pakaian :</b> {{$order->nama_bahan}}</li>
                                            <li><b>Kombinasi Warna :</b> {{$order->nama_warna_bahan}}, {{$order->pilihan_warna_bahan}}</li>
                                            <li><b>Manset Tangan :</b> {{$order->nama_manset}}</li>
                                            <li><b>Lengan :</b> {{$order->nama_lengan}}</li>
                                            <li><b>Sablon :</b> {{$order->nama_sablon}}</li>
                                            <li><b>Jumlah Warna Sablon :</b> {{$order->nama_warna_sablon}}, {{$order->pilihan_warna_sablon}}</li>
                                            <li><b>Lokasi Sablon :</b> {{$order->nama_lokasi_sablon}}</li>
                                            <li><b>Lokasi Bordir :</b> {{$order->nama_lokasi_bordir}}</li>
                                            <li><b>Ukuran Kaos :</b> {{$order->nama_jenis_ukuran}}</li>
                                            <li><b>Jumlah Kaos :</b> {{$order->jumlah_produk}}</li>
                                            <li><b>Harga :</b> {{$order->harga}}</li>
                                          </table>
                                        </div>
                                    </div>
                                  <?php else: ?>
                                    <div class="carousel-item">
                                        <div class="card-body">
                                          <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                          <table id="myTable" class="table table-bordered table-basic">
                                            <li><b>Jenis Pakaian :</b> {{$order->nama_jenis_pakaian}}</li>
                                            <li><b>Model Pakaian :</b> {{$order->nama_model}}</li>
                                            <li><b>Bahan Pakaian :</b> {{$order->nama_bahan}}</li>
                                            <li><b>Kombinasi Warna :</b> {{$order->nama_warna_bahan}}, {{$order->pilihan_warna_bahan}}</li>
                                            <li><b>Manset Tangan :</b> {{$order->nama_manset}}</li>
                                            <li><b>Lengan :</b> {{$order->nama_lengan}}</li>
                                            <li><b>Sablon :</b> {{$order->nama_sablon}}</li>
                                            <li><b>Jumlah Warna Sablon :</b> {{$order->nama_warna_sablon}}, {{$order->pilihan_warna_sablon}}</li>
                                            <li><b>Lokasi Sablon :</b> {{$order->nama_lokasi_sablon}}</li>
                                            <li><b>Lokasi Bordir :</b> {{$order->nama_lokasi_bordir}}</li>
                                            <li><b>Ukuran Kaos :</b> {{$order->nama_jenis_ukuran}}</li>
                                            <li><b>Jumlah Kaos :</b> {{$order->jumlah_produk}}</li>
                                            <li><b>Harga :</b> {{$order->harga}}</li>
                                          </table>
                                        </div>
                                    </div>
                                  <?php endif; ?>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </div>
                            <a class="carousel-control-prev" href="#detailBarang" role="button" data-slide="prev" >
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only"> Previous </span>
                            </a>
                            <a class="carousel-control-next" href="#detailBarang" role="button" data-slide="next" >
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only"> Next </span>
                            </a>

                      </div>

                  </div>
          </div>
        </div>
  </div>

<?php endforeach; ?>

<script type="text/javascript">
  $('a[data-slide="prev"]').click(function() {
    $('#detailBarang').carousel('prev');
  });

  $('a[data-slide="next"]').click(function() {
    $('#detailBarang').carousel('next');
  });
</script>
