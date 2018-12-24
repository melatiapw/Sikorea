<?php foreach ($keranjang as $cart): ?>
<div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="buktiBayar{{$cart->id}}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
            <form action="javascript:;" novalidate="novalidate">
                <div class="modal-header">
                <h5 class="modal-title">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <div id="buktiBayar" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="card-body">
                                      <h4 class="card-title">Bukti Pembayaran Transaksi {{$cart->name}}</h4>
                                      <img src="{{ Storage::url($cart->nota) }}" alt="Image placeholder" class="img-fluid">
                                    </div>
                                </div>

                        </div>

                  </div>


              </div>
      </div>
    </div>
          </form>
</div>
@endforeach
