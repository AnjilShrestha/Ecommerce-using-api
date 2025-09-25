@extends('welcome')

@section('content')
<div class="max-w-5xl mx-auto px-6 py-10">
    <h1 class="text-3xl font-bold mb-6">Your Cart</h1>

    @if(count($cart) > 0)
        <div class="grid grid-cols-1 gap-6">
            @foreach($cart as $id => $item)
                <div class="flex items-center justify-between bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center gap-4">
                        <img src="{{ $item['thumbnail'] }}" class="w-20 h-20 object-cover rounded-md" alt="{{ $item['title'] }}">
                        <div>
                            <h2 class="font-semibold text-lg">{{ $item['title'] }}</h2>
                            <p class="text-gray-600">Price: ${{ $item['price'] }}</p>
                            <p class="text-gray-600">Quantity: {{ $item['quantity'] }}</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('cart.remove') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">
                            Remove
                        </button>
                    </form>
                </div>
            @endforeach
        </div>

        {{-- Total --}}
        <div class="mt-6 text-right text-xl font-bold">
            Total: ${{ collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']) }}
        </div>
    @else
        <p class="text-gray-500">Your cart is empty.</p>
    @endif
</div>
@endsection
