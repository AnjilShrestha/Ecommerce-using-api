@props(['query' => ''])

<div class="max-w-6xl mx-auto px-4 py-4 flex flex-col md:flex-row items-center justify-between gap-4">
    {{-- Left: Search Form --}}
    <form method="GET" action="{{ route('products.index') }}" class="flex flex-1 gap-2 items-center">
        
        {{-- Search Input --}}
        <div class="relative flex-1">
            <input type="search" name="search" value="{{ $query }}"
                placeholder="Search products..."
                class="block w-full p-3 pl-4 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            <button type="submit" 
                class="absolute right-1 top-1 bottom-1 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Search
            </button>
        </div>
    </form>

    {{-- Right: Cart Link --}}
    <a href="{{ route('cart.index') }}" class="relative flex items-center justify-center px-4 py-2 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
        {{-- Cart SVG --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m4-9l2 9" />
        </svg>

        {{-- Count Badge --}}
        @if(count(session('cart', [])) > 0)
            <span class="absolute -top-1 -right-1 bg-red-600 text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
                {{ count(session('cart', [])) }}
            </span>
        @endif
    </a>
</div>
