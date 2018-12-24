@foreach ($pesanan as $p)
<div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="desain">
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
                  <img src="{{ Storage::url($p->desain) }}" alt="Image placeholder" class="img-fluid">
                </div>
            </form>
      </div>
    </div>
  </div>
@endforeach
