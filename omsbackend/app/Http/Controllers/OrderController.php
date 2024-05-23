<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Fetch all orders from the database
            $orders = Order::paginate(5);

            // Return the orders as JSON response
            return response()->json(['success' => true, 'data' => $orders], 200);
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return response()->json(['success' => false, 'message' => 'Failed to fetch orders', 'error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'customer_name' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'items' => 'required|string|max:255',
                'price' => 'required|numeric',
                'date' => 'required|date',
            ]);

            $order = Order::create($validatedData);

            // Return the created order as JSON response
            return response()->json(['success' => true, 'message' => 'Order created successfully', 'order' => $order], 201);
        } catch (\Exception $e) {
            // Handle validation errors
            return response()->json(['success' => false, 'message' => 'Failed to create order', 'error' => $e->getMessage()], 400);
        }
    }
    
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();

            return response()->json(['success' => true, 'message' => 'Order deleted successfully'], 200);
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return response()->json(['success' => false, 'message' => 'Failed to delete order', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $order = Order::findOrFail($id);
            $validatedData = $request->validate([
                'customer_name' => 'required|string|max:255',
                'status' => 'required|string|max:255',
                'items' => 'required|string|max:255',
                'price' => 'required|numeric',
            ]);
            $order->update($validatedData);

            return response()->json(['success' => true, 'message' => 'Order updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to update order', 'error' => $e->getMessage()], 500);
        }
    }

    public function cancelEdit()
    {
        // You can just return a success message here since there's no specific logic needed
        return response()->json(['success' => true, 'message' => 'Edit cancelled'], 200);
    }
}
