@extends('welcome')
{{-- tailwindcss --}}
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
{{-- font awesome --}}
@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-2xl font-bold mb-6">Products</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- Loop through products and display each using the ProductCard component --}}
        @if(count($products) == 0)
            <p class="text-center col-span-full text-gray-500">No products found.</p>
        @endif
        @foreach($products as $product)
            <x-product-card :product="$product" />
            
        @endforeach
    </div>
</div>
@endsection
