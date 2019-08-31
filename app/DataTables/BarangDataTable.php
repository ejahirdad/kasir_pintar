<?php

namespace App\DataTables;

use App\User;
use App\tBarang;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;


class BarangDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $user = Auth::user();

        return datatables($query)
        ->eloquent($this->query())

            // ->addColumn('show', function(){
            //     return 'show';
            // })

            
            ->rawColumns(['']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = tBarang::all();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns($this->getColumns())
        
        ->parameters([
            'buttons' => ['excel', 'reset', 'reload'],
            
            'dom' => '<"row"<"col-sm-4"l><"col-sm-5"B><"col-sm-3"f>><"row"<"col-sm-12"tr>><"row"<"col-sm-5"i><"col-sm-7"p>>',
        ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {

        return [
            (['data' => 'kode_barang', 'name'=>'kode_barang', 'title'=>'Kode Barang']),
            (['data' => 'nama_barang', 'name'=>'nama_barang', 'title'=>'Nama Barang']),
            (['data' => 'stok', 'name'=>'stok', 'title'=>'Stok']),
            (['data' => 'harga_jual', 'name'=>'harga_jual', 'title'=>'Harga Jual']),
            (['data' => 'harga_beli', 'name'=>'harga_beli', 'title'=>'Harga Beli']),

            // (['data'=> 'edit' ,'name' => 'edit' , 'title' => '' ,'orderable' => false,'searchable' => false, 'width' => '25px']), 
            // (['data'=> 'show' ,'name' => 'show' , 'title' => '' ,'orderable' => false,'searchable' => false, 'width' => '25px']),
            // (['data'=> 'delete' ,'name' => 'delete' , 'title' => '' ,'orderable' => false,'searchable' => false, 'width' => '25px']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Barang Keseluruhan ' . date('YmdHis');
    }
}
