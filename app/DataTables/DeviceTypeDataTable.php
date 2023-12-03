<?php

namespace App\DataTables;

use App\Models\DeviceType;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;

class DeviceTypeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($query) {
                $btns = "<div class='btn-group mr-3 mb-4' role='group' aria-label='Basic example'>
                    <a href='" . route('admin.device_types.edit', $query->id) . "' type='button' class='btn btn-primary'><i class='far fa-edit'></i></a>
                    <a href='" . route('admin.device_types.destroy', $query->id) . "' type='button' class='btn btn-danger delete-item'><i class='fas fa-trash-alt'></i></a>
                </div>";
                return $btns;
            })
            ->addColumn('image', function ($query) {
                if ($query->image != null) {
                    return $img = "<img width='80px' src='" . asset($query->image) . "'></img>";
                }
                return $img = "<img width='80px' src='" . url('admin/no-category-image.jpg') . "'></img>";
            })
            ->rawColumns(['image', 'action', 'status'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\DeviceType $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(DeviceType $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('devicetype-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('image'),
            Column::make('name'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'DeviceType_' . date('YmdHis');
    }
}
