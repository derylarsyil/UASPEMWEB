<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Symfony\Component\HttpFoundation\StreamedResponse;

class OrderController extends Controller
{
    // LIST PESANAN
    public function index()
    {
        $orders = Order::with('user')->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    // HAPUS PESANAN
    public function destroy(Order $order)
    {
        $order->delete();
        return back()->with('success', 'Pesanan berhasil dihapus');
    }

    // EXPORT CSV
    public function export()
    {
        $fileName = 'orders_' . date('Y-m-d') . '.csv';

        $orders = Order::with('user')->latest()->get();

        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $callback = function () use ($orders) {
            $file = fopen('php://output', 'w');

            // HEADER CSV
            fputcsv($file, [
                'ID Order',
                'Nama User',
                'Email',
                'Total Harga',
                'Metode Pembayaran',
                'Status',
                'Tanggal'
            ]);

            foreach ($orders as $order) {
                fputcsv($file, [
                    $order->id,
                    $order->user->name,
                    $order->user->email,
                    $order->total_price,
                    $order->payment_method,
                    $order->status,
                    $order->created_at->format('Y-m-d H:i')
                ]);
            }

            fclose($file);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
}
