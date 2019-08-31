
    <div class="modal fade" id="lihatBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Lihat Barang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                    <div class="modal-body">
                        <div class="row">
                            {!! Form::label('kode_barang', 'Kode Barang', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-1" style="width:unset;"> : </div>
                            <div class="col-md-5">
                                <p id="kode_barangg"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            {!! Form::label('nama_barang', 'Nama Barang', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-1" style="width:unset;"> : </div>
                            <div class="col-md-5">
                                <p id="nama_barangg"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            {!! Form::label('stok', 'Stok', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-1" style="width:unset;"> : </div>
                            <div class="col-md-5">
                                <p id="stokk"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            {!! Form::label('harga_jual', 'Harga Jual', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-1" style="width:unset;"> : </div>
                            <div class="col-md-5">
                                <p id="harga_juall"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            {!! Form::label('harga_beli', 'Harga Beli', ['class'=>'col-md-4 control-label']) !!}
                            <div class="col-md-1" style="width:unset;"> : </div>
                            <div class="col-md-5">
                                <p id="harga_belii"></p>
                            </div>
                        </div>
                        <br>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
    
              </div>
            </div>
        </div>
        
        <script>
        
        $(document).ready(function(){
    
            $('#lihatBarang').on('show.bs.modal', function (event) {
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
                    var modal = $('#lihatBarang');
                    modal.find('.modal-body #kode_barangg').text(data.kode_barang)
                    modal.find('.modal-body #nama_barangg').text(data.nama_barang)
                    modal.find('.modal-body #stokk').text(data.stok)
                    modal.find('.modal-body #harga_juall').text(data.harga_jual)
                    modal.find('.modal-body #harga_belii').text(data.harga_beli)
                }
    
                }); 
                // --------------- //akhir dari ajax
            })
    
        });
        
        </script>