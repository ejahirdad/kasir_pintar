<div class="modal fade" id="editBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(array('route'=>['update'],'data-parsley-validate'=>'', 'id'=>'form_update')) !!}
           
            {{-- {{csrf_field()}} --}}
                <div class="modal-body">
                    <input type="hidden" name="id_barang" id="id_barang">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode Barang:</label>
                        <input type="text" class="form-control" name="kode_barang" id="kode_barang">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama Barang:</label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Stok:</label>
                        <input type="number" class="form-control" name="stok" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Harga Jual:</label>
                        <input type="number" class="form-control" name="harga_jual" id="harga_jual">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Harga Beli:</label>
                        <input type="number" class="form-control" name="harga_beli" id="harga_beli">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit"  class="btn btn-primary">Perbarui</button>
                </div>
            {!! Form::close() !!}

          </div>
        </div>
    </div>

        <script>
        
            $(document).ready(function(){
        
                $('#editBarang').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget) // Button that triggered the modal
                    var idB = button.data('idbarang') // Extract info from data-* attributes
                    // alert(idB);
                    $.ajax({
        
                    url: '/getDataBarang/' + idB,
        
                    type: "GET",
        
                    dataType: "json",
        
                    success:function(data) {
                        console.log('coba ambil data');
                        console.log(data);
                        var modal = $('#editBarang');
                        modal.find('.modal-body #id_barang').val(data.id)
                        modal.find('.modal-body #kode_barang').val(data.kode_barang)
                        modal.find('.modal-body #nama_barang').val(data.nama_barang)
                        modal.find('.modal-body #stok').val(data.stok)
                        modal.find('.modal-body #harga_jual').val(data.harga_jual)
                        modal.find('.modal-body #harga_beli').val(data.harga_beli)
                    }
        
                    }); 
                    // --------------- //akhir dari ajax
                })
        
            });
            
        </script>