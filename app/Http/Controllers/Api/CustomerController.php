<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderby('id', 'desc')->get();

        return response()->json($customers);
    }

    public function store(Request $request)
    {

        $customer = Customer::create($request->all());

        return response()->json([
            'status' => 'success',
            'customer'   => $customer
        ]);
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());

        return response()->json([
            'status' => 'success',
            'post'   => $customer
        ]);
    }

    public function destroy($id)
     {
         $customer = Customer::find($id);
         $customer->delete();

         return response()->json('Customer successfully deleted!');
     }
}

