<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SalesOrder;

class SalesOrderController extends Controller
{
    public function index()
    {
        $salesOrders = SalesOrder::orderby('id', 'desc')->get();

        return response()->json($salesOrders);
    }

    public function store(Request $request)
    {

        $salesOrder = SalesOrder::create($request->all());

        return response()->json([
            'status' => 'success',
            'salesOrder'   => $salesOrder
        ]);
    }

    public function show($id)
    {
        $salesOrder = SalesOrder::find($id);

        return response()->json($salesOrder);
    }

    public function update(Request $request, $id)
    {
        $salesOrder = SalesOrder::find($id);
        $salesOrder->update($request->all());

        return response()->json([
            'status' => 'success',
            'post'   => $salesOrder
        ]);
    }

    public function destroy($id)
     {
         $salesOrder = SalesOrder::find($id);
         $salesOrder->delete();

         return response()->json('SalesOrder successfully deleted!');
     }
}

