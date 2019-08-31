<div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            {!! Form::open(array('route'=>'options.store','data-parsley-validate'=>'', 'id'=>'form')) !!}
           
                <div class="modal-body">
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
                    <button type="submit"  class="btn btn-primary">Simpan</button>
                </div>
            {!! Form::close() !!}

          </div>
        </div>
    </div>
