@props(['message' => '', 'type' => 'success'])

<div 
    x-data="{ show: true }"
    x-show="show"
    x-transition:enter="transition transform ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition transform ease-in duration-300"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-2"
    x-init="setTimeout(() => show = false, 3000)"
    class="fixed top-5 right-5 z-50 flex items-center px-4 py-3 rounded shadow-lg text-white font-medium
           {{ $type === 'success' ? 'bg-green-500' : 'bg-red-500' }}"
>
    {{ $message }}

    <button @click="show = false" class="ml-3 text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 8.586l4.95-4.95 1.414 1.414L11.414 10l4.95 4.95-1.414 1.414L10 11.414l-4.95 4.95-1.414-1.414L8.586 10 3.636 5.05l1.414-1.414L10 8.586z" clip-rule="evenodd" />
        </svg>
    </button>
</div>
