<?php

namespace App\DataTables;


use App\Models\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class ProductsDataTable extends DataTable
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
            ->addColumn('edit', 'admin.products.btn.edit')
            ->addColumn('delete', 'admin.products.btn.delete')
            ->addColumn('brand_id', function ($product) {
                if(!empty($product->brand)){
                    return $product->brand->name;
                }
                return 'no brand';
            })
            ->addColumn('category_id', function ($product) {
                if(!empty($product->category)){
                    return $product->category->name;
                }
                return 'no category';
            })
            ->addColumn('available', function ($product) {
                if($product->available==1){
                    return 'available';
                }
                else{
                    return 'not available';
                }

            })
            ->rawColumns(['available','category_id','brand_id','edit','delete']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ProductDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Product::query();
    }
    public static function lang()
    {
        $language=[];
        if(session()->has('lang')){
            if(session('lang')=='ar'){
                $language=[
                    'adminpanel'                   => 'لوحة التحكم',
                    'inccorrect_information_login' => 'البريد الالكترونى او كلمة المرور غير صحيحة من فضلك اعد المحاولة',
                    'forgot_password'              => 'نسيت كلمة المرور',
                    'the_link_reset_sent'          => 'ارسل رابط استعادة الحساب',
                    'admin'                        => 'حسابات المشرفين',
                    'dashboard'                    => 'الرئيسية',
                    'create_admin'                 => 'اضف مشرف جديد',
                    'ex_excel'                     => 'تصدير ك Excel',
                    'ex_csv'                       => 'تصدير ك CSV',
                    'all_record'                   => 'كل السجلات',
                    'sProcessing'                  => 'تحميل',
                    'sLengthMenu'                  => 'اظهار _MENU_ سجل',
                    'sZeroRecords'                 => 'صفر سجل',
                    'sEmptyTable'                  => 'جدول خالى',
                    'sInfo'                        => 'اظهار _START_ الى  _END_ من _TOTAL_ سجل',
                    'sInfoEmpty'                   => 'معلومات خالية',
                    'sInfoFiltered'                => 'معلومات منتقاه',
                    'sInfoPostFix'                 => '',
                    'sSearch'                      => 'بحث',
                    'sUrl'                         => '',
                    'sInfoThousands'               => '',
                    'sLoadingRecords'              => 'تحميل السجلات',
                    'sFirst'                       => 'الاول',
                    'sLast'                        => 'الاخير',
                    'sNext'                        => 'التالى',
                    'sPrevious'                    => 'السابق',
                    'sSortAscending'               => 'ترتيب بحسب الاقدم',
                    'sSortDescending'              => 'ترتيب بحسب الاحدث',
                ];
            }

        }
        return $language;
    }
    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('storedatatable-table')
            ->columns($this->getColumns())

            ->minifiedAjax()
            ->orderBy(1)
            ->parameters([
                'dom' => 'Blfrtip',
                'lengthMenu'=>[[10,20,50,100,-1],[10,20,50,100,trans('admin.TextAll')]],
                'buttons'      => [
                    ['extend'=>'print','className'=>'btn btn-primary ','text'=>'<i class="fas fa-print"></i> '.'Print'],
                    ['extend'=>'export','className'=>' btn btn-primary ','text'=>'<i class="fas fa-download"></i> '.'Export'],
                    ['extend'=>'reset','className'=>' btn btn-primary ','text'=>'<i class="fas fa-redo-alt"></i> '.'Reset'],
                    ['extend'=>'reload','className'=>' btn btn-primary ','text'=>'<i class="fas fa-sync-alt"></i> '.'Reload'],
                    ['className'=>' btn btn-primary ','text'=>'<i class="fas fa-plus-circle"></i>'.'Create','action'=>"function(){
                                window.location.href='/admin/product/create';}"],
                ],
                'initComplete'=> "function () {
                        this.api().columns([0,1,2,3,4,5,6]).every(function () {
                            var column = this;
                            var input = document.createElement(\"input\");
                            $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                        });
                    }",
                'language'=>self::lang(),
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
            [
                'name'=>'id',
                'data'=>'id',
                'title'=>'ID'
            ],
            [
                'name'=>'name',
                'data'=>'name',
                'title'=>'Name'
            ],[
                'name'=>'category_id',
                'data'=>'category_id',
                'title'=>'Category'
            ],[
                'name'=>'brand_id',
                'data'=>'brand_id',
                'title'=>'Brand'
            ], [
                'name'=>'price',
                'data'=>'price',
                'title'=>'Price'
            ],[
                'name'=>'amount',
                'data'=>'amount',
                'title'=>'Amount'
            ],[
                'name'=>'available',
                'data'=>'available',
                'title'=>'available'
            ],
            [
                'name'=>'edit',
                'data'=>'edit',
                'title'=>'Edit',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,
            ],
            [
                'name'=>'delete',
                'data'=>'delete',
                'title'=>'Delete',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,
            ],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'products_' . date('YmdHis');
    }
}