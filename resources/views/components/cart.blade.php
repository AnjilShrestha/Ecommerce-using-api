@props(['product'])
<form method="POST" action="{{ route('cart.add') }}" class="flex">
    @csrf
    <input type="hidden" name="product[id]" value="{{ $product['id'] }}">
    <input type="hidden" name="product[title]" value="{{ $product['title'] }}">
    <input type="hidden" name="product[price]" value="{{ $product['price'] }}">
    <input type="hidden" name="product[thumbnail]" value="{{ $product['thumbnail'] }}">

    <button type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m4-9l2 9" />
        </svg>
    </button>
</form>