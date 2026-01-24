<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.layouts.pages.order.index', compact('orders'));
    }

    public function orderChangeStatus(Request $request, $id)
    {
        $request->validate([
            'status' => ['required', Rule::in(['pending', 'cancelled', 'confirmed', 'shipped', 'delivered'])],
        ]);

        $order                    = Order::findOrFail($id);
        $order->status            = $request->status ?? 'pending';
        $order->status_updated_at = now();
        $order->save();

        return response()->json(['message' => 'Order status updated successfully.']);
    }

    public function show($id)
    {
        $order = Order::with('orderItems')->findOrFail($id);

        return view('admin.layouts.pages.order.show', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        if ($order) {
            $order->orderItems()->delete();

            $order->delete();

            $toast = Toastr();
            $toast->success('Order and associated items deleted successfully!', 'Success');
        } else {
            $toast = Toastr();
            $toast->error('Order not found!', 'Error');
        }

        return redirect()->back();
    }


    public function orderFilter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date   = $request->end_date;
        $status     = $request->status;

        $query = Order::query();

        if ($start_date) {
            $query->whereDate('created_at', '>=', $start_date);
        }

        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }

        if ($status) {
            $query->where('status', $status);
        }

        $orders = $query->latest()->get();

        $totalAmount = $orders->sum('total_price');

        if ($request->ajax()) {
            return response()->json([
                'html'        => view(
                    'admin.layouts.pages.order.partials.order_table',
                    compact('orders')
                )->render(),
                'totalAmount' => round($totalAmount),
            ]);
        }

        return view('admin.layouts.pages.order.index', compact('orders'));
    }

    public function sendToSteadfast($id)
    {
        $order = Order::findOrFail($id);

        // Already sent protection
        if ($order->consignment_id) {
            return back()->with('error', 'Order already sent to courier.');
        }

        // Only confirmed orders
        if ($order->status !== 'confirmed') {
            return back()->with('error', 'Only confirmed orders can be sent.');
        }

        $response = Http::withHeaders([
            'Api-Key'    => config('services.steadfast.key'),
            'Secret-Key' => config('services.steadfast.secret'),
            'Accept'     => 'application/json',
        ])->post(config('services.steadfast.url') . '/create_order', [
            'invoice'           => $order->order_id,
            'recipient_name'    => trim($order->first_name . ' ' . $order->last_name),
            'recipient_phone'   => $order->phone,
            'recipient_address' => $order->address,
            'cod_amount'        => $order->total_price,
        ]);

        if ($response->successful()) {

            $order->update([
                'courier_name'   => 'steadfast',
                'courier_status' => 'sent',
                'consignment_id' => $response['consignment_id'] ?? null,
                'status'         => 'shipped',
            ]);

            return back()->with('success', 'Order sent to Steadfast successfully.');
        }

        return back()->with('error', 'Steadfast API error.');
    }
}
