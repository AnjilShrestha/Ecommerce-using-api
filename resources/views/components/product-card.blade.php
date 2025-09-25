@props(['product'])

<div class="flex flex-col justify-between h-full border p-4 rounded-lg shadow hover:shadow-lg transition">
    {{-- Product Info --}}
    <div>
        <img src="{{ $product['thumbnail'] }}" 
             alt="{{ $product['title'] }}" 
             class="w-24 h-24 object-cover rounded-lg mb-2">
        <h2 class="font-semibold text-lg">{{ $product['title'] }}</h2>
        <p class="text-gray-600 text-sm mb-2">{{ Str::limit($product['description'], 60) }}</p>
        <div class="flex justify-between items-center mb-3">
            <span class="text-green-600 font-bold">${{ $product['price'] }}</span>
            <span class="text-yellow-500">⭐ {{ $product['rating'] }}</span>
        </div>
    </div>

    {{-- Buttons: View Details + Add to Cart --}}
    <div class="flex gap-2 mt-auto">
        {{-- View Details --}}
        <a href="{{ route('productdetails', ['id' => $product['id']]) }}" 
           class="flex-1 text-center bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            View Details
        </a>

        {{-- Add to Cart --}}
        <x-cart :product="$product" />
        
    </div>
</div>

