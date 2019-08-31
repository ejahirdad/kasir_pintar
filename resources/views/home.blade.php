@extends('adminlte::page')

@section('title', 'Barang Barang')

@section('style')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection
@section('content')


<script src="{{ asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
{{-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
<style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    <div class="row">
        <div class="col-md-12">
            <ul class = "breadcrumb">
                <li> <a href = "{{ url('home')}}"> Dashboard </a></li>
                <li class = "active" > Daftar Barang</a> </li>
            </ul>
            
            <div class="box box-primary">  
                <div class="box-header">
                    <h3 class="box-title">Daftar Barang</h3>
                </div>
    
                <div class="box-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarang" data-whatever="@mdo">Tambah Barang</button>
                    <br><br>
                    <div class="table-responsive">
                        {{-- {!! $dataTable->table(['class' => 'table-striped', 'width' => '100%']) !!} --}}
{{-- <br><br> --}}
                        <table class="table table-bordered responsive">
                            @if($data_barang == null)
                            <tr>
                                <h3>
                                    Kosong
                                </h3>
                            </tr>
                            @endif
                            <tr>
                                @role('owner')
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok Barang</th>
                                <th>Harga Jual</th>
                                <th>Harga Beli</th>
                                <th>Aksi</th>
                                @endrole 
                                @role('admin')
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok Barang</th>
                                <th>Harga Jual</th>
                                <th>Aksi</th>
                                @endrole 
                                @role('staff')
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok Barang</th>
                                <th>Aksi</th>
                                @endrole 
                            </tr>
                            @foreach ($data_barang as $barang)
                            <tr>
                                @role('owner')
                                <td>{{$barang->kode_barang}}</td>
                                <td>{{$barang->nama_barang}}</td>
                                <td>{{$barang->stok}}</td>
                                <td>{{$barang->harga_jual}}</td>
                                <td>{{$barang->harga_beli}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#lihatBarang" data-idbarang="{{$barang->id}}"></button>
                                    <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#editBarang" data-idbarang="{{$barang->id}}"></button>
                                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')" href="{{route('deletebarang', $barang->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                @endrole 
                                @role('admin')
                                <td>{{$barang->kode_barang}}</td>
                                <td>{{$barang->nama_barang}}</td>
                                <td>{{$barang->stok}}</td>
                                <td>{{$barang->harga_jual}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#lihatBarang" data-idbarang="{{$barang->id}}"></button>
                                    <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#editBarang" data-idbarang="{{$barang->id}}"></button>
                                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')" href="{{route('deletebarang', $barang->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                @endrole 
                                @role('staff')
                                <td>{{$barang->kode_barang}}</td>
                                <td>{{$barang->nama_barang}}</td>
                                <td>{{$barang->stok}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#lihatBarang" data-idbarang="{{$barang->id}}"></button>
                                    <button type="button" class="btn btn-warning btn-xs glyphicon glyphicon-edit" data-toggle="modal" data-target="#editBarang" data-idbarang="{{$barang->id}}"></button>
                                    <a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure?')" href="{{route('deletebarang', $barang->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                                @endrole 

                            </tr>
                                
                                
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('_create')
    @include('_read')
    @include('_update')

@stop


@section('scripts')
    {{-- {!! $dataTable->scripts() !!} --}}
    
@endsection
