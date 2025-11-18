@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="text-center py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-4xl font-extrabold mb-4">Laundry Services</h2>
        <p class="text-gray-600 mb-6">Services you will love</p>
        <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded">Read more</a>
    </div>
    <div class="flex justify-center mt-8 space-x-4">
        <img src="\images\clothes.jpg" class="w-32 h-32" alt="">
        <img src="\images\washingclothes.jpg" class="w-32 h-32" alt="">
        <img src="\images\finalimage3.jpg" class="w-32 h-32" alt="">
    </div>
</section>

<!-- Services -->
<section class="py-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold">Services you will love</h2>
        <p class="text-gray-600">We think ahead</p>
    </div>
    <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-10 text-center">
        <div>
            <img src="\images\foldedclothes.jpg" alt="" class="mx-auto w-52 mt-o
            <h3 class="font-semibold">Guaranteed Services</h3>
        </div>
        <div>
            <img src="/images/service2.png" alt="" class="mx-auto w-16 mb-4">
            <h3 class="font-semibold">Affordable Price</h3>
        </div>
        <div>
            <img src="/images/service3.png" alt="" class="mx-auto w-16 mb-4">
            <h3 class="font-semibold">Pick Up & Delivery Free</h3>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-pink-200 py-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center px-6">
        <!-- Image -->
        <div class="flex justify-center">
            <img src="{{ asset('images/hangerofclothes.jpg') }}" alt="Clothes on hanger" class="w-full max-w-md rounded-2xl shadow-lg">
        </div>

        <!-- Text -->
        <div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why choose us</h2>
            <p class="text-gray-700 mb-8 leading-relaxed">
                We think ahead — providing faster, smarter, and more reliable laundry services designed for your comfort and satisfaction.
            </p>
            <div class="space-y-4">
                <div class="flex items-center space-x-3">
                    <span class="text-blue-600 text-xl">✔</span>
                    <span class="text-gray-800 font-medium">Faster Service</span>
                </div>
                <div class="flex items-center space-x-3">
                    <span class="text-blue-600 text-xl">✔</span>
                    <span class="text-gray-800 font-medium">Delivery Free</span>
                </div>
            </div>
            <a href="#services" class="inline-block mt-8 bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Read more
            </a>
        </div>
    </div>
</section>


<!-- Pricing -->
<section class="py-16 bg-gray-50 text-center">
    <h2 class="text-3xl font-bold mb-10">Affordable Price</h2>
    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
        <div class="border p-8 rounded-lg bg-white shadow hover:shadow-lg">
            <h3 class="text-2xl font-semibold mb-2">Basic Plan</h3>
            <p class="text-gray-600 mb-4">Billed every month</p>
            <p class="text-4xl font-bold mb-6">$12</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded">Read more</a>
        </div>
        <div class="border p-8 rounded-lg bg-white shadow hover:shadow-lg">
            <h3 class="text-2xl font-semibold mb-2">Regular Plan</h3>
            <p class="text-gray-600 mb-4">Billed every month</p>
            <p class="text-4xl font-bold mb-6">37</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded">Read more</a>
        </div>
        <div class="border p-8 rounded-lg bg-white shadow hover:shadow-lg">
            <h3 class="text-2xl font-semibold mb-2">Mega Plan</h3>
            <p class="text-gray-600 mb-4">Billed every month</p>
            <p class="text-4xl font-bold mb-6">78</p>
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded">Read more</a>
        </div>
    </div>
</section>
@endsection
