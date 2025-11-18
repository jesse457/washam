@extends('layouts.app')

@section('content')
<section class="bg-gray-50 py-20 px-6">
  <div class="max-w-6xl mx-auto text-center mb-12">
    <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Laundry Services</h2>
    <p class="text-gray-600">Choose the type of clothes or items you want to wash and instantly see the prices.</p>
  </div>

  <!-- Laundry Categories -->
  <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
    @php
      $items = [
        ['name' => 'Shoes', 'price' => 1500, 'img' => '/images/shoes.jpg'],
        ['name' => 'Shirts', 'price' => 500, 'img' => '/images/shirt.jpg'],
        ['name' => 'Curtains', 'price' => 2000, 'img' => '/images/curtain.jpg'],
        ['name' => 'Blankets', 'price' => 2500, 'img' => '/images/blanket.jpg'],
        ['name' => 'Suits', 'price' => 1800, 'img' => '/images/suit.jpg'],
        ['name' => 'Daily Wear', 'price' => 800, 'img' => '/images/dailywear.jpg'],
        ['name' => 'Underwear', 'price' => 300, 'img' => '/images/underwear.jpg'],
        ['name' => 'Bedsheets', 'price' => 1000, 'img' => '/images/bedsheet.jpg'],
        ['name' => 'Jackets', 'price' => 1200, 'img' => '/images/jacket.jpg'],
      ];
    @endphp

    @foreach($items as $item)
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition p-4">
        <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}" class="w-full h-48 object-cover rounded-xl mb-4">
        <h3 class="text-xl font-semibold text-gray-800">{{ $item['name'] }}</h3>
        <p class="text-gray-600 mt-2 mb-4">Price: <span class="font-bold text-green-600">{{ $item['price'] }} FCFA</span></p>

        <div class="flex justify-between items-center">
          <input type="number" min="0" value="0" class="quantity border border-gray-300 rounded-lg w-20 px-2 py-1 text-center focus:ring-2 focus:ring-green-400" data-price="{{ $item['price'] }}">
          <button class="add-btn bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">Add</button>
        </div>
      </div>
    @endforeach
  </div>

  <!-- Cart Section -->
  <div class="max-w-3xl mx-auto mt-16 bg-white rounded-2xl shadow-lg p-6">
    <h3 class="text-2xl font-bold mb-4 text-gray-800">🧾 Your Laundry Summary</h3>
    <ul id="cart-list" class="space-y-2 text-gray-700"></ul>
    <div class="flex justify-between items-center mt-6 border-t pt-4">
      <p class="text-xl font-bold text-gray-800">Total:</p>
      <p id="total" class="text-2xl font-bold text-green-600">0 FCFA</p>
    </div>
    <button class="mt-6 w-full bg-blue-600 text-white py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">Proceed to Checkout</button>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const addButtons = document.querySelectorAll('.add-btn');
  const cartList = document.getElementById('cart-list');
  const totalDisplay = document.getElementById('total');
  let total = 0;

  addButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const parent = btn.closest('div');
      const itemName = parent.querySelector('h3').textContent;
      const quantityInput = parent.querySelector('.quantity');
      const qty = parseInt(quantityInput.value);
      const price = parseInt(quantityInput.dataset.price);

      if (qty > 0) {
        const itemTotal = qty * price;
        total += itemTotal;
        const listItem = document.createElement('li');
        listItem.innerHTML = `${qty} × ${itemName} — <span class="font-semibold text-green-600">${itemTotal} FCFA</span>`;
        cartList.appendChild(listItem);
        totalDisplay.textContent = total + ' FCFA';
        quantityInput.value = 0;
      }
    });
  });
});
</script>
@endsection
