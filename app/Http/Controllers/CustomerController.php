<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'document' => 'required',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->document = $request->input('document');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');

        $customer->save();
        return response()->json($customer);

    }

    public function show()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }

    public function showbyId($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'document' => 'required',
            'email' => 'required|email',
            'address' => 'required|string',
        ]);
        
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->document = $request->input('document');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');

        $customer->save();
        return response()->json($customer);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return response()->json($customer);
    }
}
