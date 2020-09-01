<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\VouchersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Voucher;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VoucherController extends Controller
{
    public function index(VouchersDataTable $tag)
    {
        return $tag->render('admin.tags.index',['title'=>'admin title']);
    }

    public function create()
    {
        $products=Product::all();
        return view('admin.vouchers.create-Voucher',compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code'=>['required','string','unique:vouchers'],
            'name'=>['required','string','unique:vouchers'],
            'product_id'=>['required'],
            'active'=>['required','integer'],
            'discount'=>['required','integer'],
            'max_used'=>['required','integer'],
            'starts_at'=>['required'],
            'expires_at'=>['required'],
            'description'=>['nullable'],
        ]);
        $voucher=new Voucher();
        $voucher->code=$request->code;
        $voucher->name=$request->name;
        $voucher->product_id=$request->product_id;
        $voucher->active=$request->active;
        $voucher->discount=$request->discount;
        $voucher->max_used=$request->max_used;
        $voucher->starts_at=$request->starts_at;
        $voucher->expires_at=$request->expires_at;
        $voucher->description=$request->description;
        $voucher->save();

        return Redirect::back()->with('success', 'Created Account Voucher Successfully');
    }
    public function show($id)
    {
        //
    }
    public function edit($id){
        $voucher=Voucher::find($id);
        $products=Product::all();
        return view('admin.vouchers.edit-Voucher',compact('voucher','products'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'code'=>['required','string','unique:vouchers,code,'.$id],
            'name'=>['required','string','unique:vouchers,name,'.$id],
            'product_id'=>['required'],
            'active'=>['required','integer'],
            'discount'=>['required','integer'],
            'max_used'=>['required','integer'],
            'starts_at'=>['required'],
            'expires_at'=>['required'],
            'description'=>['nullable']
        ]);
        $voucher=Voucher::find($id);
        $voucher->code=$request->code;
        $voucher->name=$request->name;
        $voucher->product_id=$request->product_id;
        $voucher->active=$request->active;
        $voucher->discount=$request->discount;
        $voucher->max_used=$request->max_used;
        $voucher->starts_at=$request->starts_at;
        $voucher->expires_at=$request->expires_at;
        $voucher->description=$request->description;
        $voucher->save();
        return Redirect::back()->with('success', 'Updated Voucher Successfully');
    }
    public function destroy($id)
    {
        $voucher=Voucher::Find($id);
        $voucher->delete();
        return Redirect::back()->with('success', 'Deleted Voucher Successfully');
    }
}
