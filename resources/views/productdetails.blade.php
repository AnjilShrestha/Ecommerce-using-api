@extends('welcome')


@section('content')
<div class="max-w-5xl mx-auto px-6 py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white  p-6">
        
        {{-- Left: Product Images --}}
        <div>
            <img src="{{ $product['thumbnail'] }}" 
                 alt="{{ $product['title'] }}" 
                 class="w-full h-80 object-cover rounded-lg mb-4">
            
            <div class="flex gap-2 overflow-x-auto">
                @foreach($product['images'] as $img)
                    <img src="{{ $img }}" 
                         alt="gallery image" 
                         class="w-24 h-24 object-cover rounded-md border hover:scale-105 transition">
                @endforeach
            </div>
        </div>

        {{-- Right: Product Info --}}
        <div>
            <h1 class="text-3xl font-bold mb-3">{{ $product['title'] }}</h1>
            <p class="text-gray-600 mb-4">{{ $product['description'] }}</p>

            <div class="flex items-center gap-4 mb-4">
                <span class="text-2xl font-semibold text-green-600">${{ $product['price'] }}</span>
                <span class="text-yellow-500">⭐ {{ $product['rating'] }}</span>
                <span class="text-sm text-gray-500">Stock: {{ $product['stock'] }}</span>
            </div>

            <div class="mb-4">
                <span class="px-3 py-1 text-sm rounded-full bg-blue-100 text-blue-700">
                    {{ $product['category'] }}
                </span>
                <span class="px-3 py-1 text-sm rounded-full bg-purple-100 text-purple-700">
                    Brand: {{ $product['brand'] }}
                </span>
            </div>

            <button class="bg-blue-600 text-white px-6 py-3 rounded-md font-semibold hover:bg-blue-700 transition">
                Add to Cart
            </button>
        </div>
    </div>
</div>
@endsection
