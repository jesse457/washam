@extends('admin.admin')

@section('page-title', 'Orders')

@section('content')
<div class="bg-white p-6 rounded-xl shadow">
    <h3 class="text-xl font-semibold mb-4">All Orders</h3>

    <div class="overflow-x-auto">
        <table class="min-w-full text-left text-gray-700">
            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-4 py-2">Customer</th>
                    <th class="px-4 py-2">Service</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Amount</th>
                    <th class="px-4 py-2">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $order->user->name }}</td>
                    <td class="px-4 py-2">{{ $order->service->name }}</td>
                    <td class="px-4 py-2">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold
                            {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' :
                               ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-100 text-gray-700') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-2">₦{{ number_format($order->amount, 2) }}</td>
                    <td class="px-4 py-2 text-sm text-gray-500">{{ $order->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
