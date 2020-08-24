<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\OrdersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function index(OrdersDataTable $order)
    {
        return $order->render('admin.orders.index',['title'=>'admin title']);
    }

    public function create()
    {
        return view('admin.orders.create-Order');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>['required','string','unique:orders'],

        ]);
        $order=new Order();
        $order->name=$request->name;
        $order->save();
        return Redirect::back()->with('success', 'Created Account Order Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id){
        $order=Order::find($id);
        return view('admin.orders.edit-Order',compact('order'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'=>['required','string','unique:orders,name,'.$id],

        ]);
        $order=Order::find($id);
        $order->name=$request->name;
        $order->save();
        return Redirect::back()->with('success', 'Updated Order Successfully');

    }

    public function destroy($id)
    {
        $order=Order::Find($id);
        $order->delete();
        return Redirect::back()->with('success', 'Deleted Order Successfully');
    }

}
