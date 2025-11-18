@extends('admin.admin')

@section('page-title', 'Laundry Services')

@section('content')
<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($services as $service)
    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition transform hover:-translate-y-1">
        <h3 class="text-xl font-semibold text-blue-800">{{ $service->name }}</h3>
        <p class="text-gray-600 mt-2">{{ $service->description }}</p>
        <div class="mt-4">
            <span class="text-2xl font-bold text-green-700">₦{{ number_format($service->price, 2) }}</span>
        </div>
        <button class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">Edit</button>
    </div>
    @endforeach
</div>
@endsection
