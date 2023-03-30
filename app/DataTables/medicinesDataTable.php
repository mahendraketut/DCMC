<?php

namespace App\DataTables;

use App\Models\Medicines;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class medicinesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editMedicine">Edit</a>';
                $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteMedicine">Delete</a>';
                return $btn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Medicines $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Medicines $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('medicines-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
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
    public function getColumns()
    {
        return [
            Column::make('DT_RowIndex')->title('No.')->searchable(false)->orderable(false)->addClass('text-center'),
            Column::make('medicine_id')->title('Medicine ID'),
            Column::make('name')->title('Name'),
            Column::make('description')->title('Description'),
            Column::make('price')->title('Price'),
            Column::make('quantity')->title('Quantity'),
            Column::make('image')->title('Image'),
            Column::make('category_id')->title('Category ID'),
            Column::make('status')->title('Status'),
            Column::make('expiry_date')->title('Expiry Date'),
            Column::make('manufacture_date')->title('Manufacture Date'),
            Column::make('manufacture_company')->title('Manufacture Company'),
            Column::make('generic_name')->title('Generic Name'),
            Column::make('dosage')->title('Dosage'),
            Column::make('side_effects')->title('Side Effects'),
            Column::make('precautions')->title('Precautions'),
            Column::make('storage')->title('Storage'),
            Column::make('how_to_use')->title('How To Use'),
            Column::make('how_it_works')->title('How It Works'),
            Column::make('other_information')->title('Other Information'),
            Column::make('composition')->title('Composition'),
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
        return 'medicines_' . date('YmdHis');
    }
}
