<?php foreach ($keranjang as $cart): ?>
<div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="desain{{$cart->id}}">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
            <form action="javascript:;" novalidate="novalidate">
                <div class="modal-header">
                <h5 class="modal-title">Desain Pesanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                  <div id="desainPesanan" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <?php $index = -1; ?>
                          <?php foreach ($pesanan as $order): ?>
                            <?php if ($order->cart_id == $cart->id): ?>
                              <?php $index++; ?>
                              <?php if ($index==0): ?>
                                <div class="carousel-item active">
                                    <div class="card-body">
                                      <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                      <img src="{{ Storage::url($order->desain) }}" alt="Image placeholder" class="img-fluid">
                                    </div>
                                </div>
                              <?php else: ?>
                                <div class="carousel-item">
                                    <div class="card-body">
                                      <h4 class="card-title">Barang ke-{{$index+1}}</h4>
                                      <img src="{{ Storage::url($order->desain) }}" alt="Image placeholder" class="img-fluid">
                                    </div>
                                </div>
                              <?php endif; ?>

                            <?php endif; ?>

                          <?php endforeach; ?>


                        </div>

                  </div>
                  <a class="carousel-control-prev" href="#desainPesanan" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"> Previous </span>
                  </a>
                  <a class="carousel-control-next" href="#desainPesanan" role="button" data-slide="next" >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <p>Next</p>
                    <span class="sr-only"> Next </span>
                  </a>


              </div>
      </div>
    </div>
          </form>
</div>
@endforeach
