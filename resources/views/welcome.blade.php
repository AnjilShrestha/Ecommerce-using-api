<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Ecommerce') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-[#FDFDFC]  text-[#1b1b18] flex p-6 lg:p-8 items-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] mb-6">
        <a href="/" class="text-gray-600 hover:text-gray-800 mb-4 inline-block">
            <h1 class="text-3xl font-bold mb-4">E-Commerce Store</h1>
            
        </a>
        <x-searchbar :query="request('search')" />
        @if(session('success'))
        <x-toast :message="session('success')" type="success" />
        @endif

        @if(session('error'))
        <x-toast :message="session('error')" type="error" />
        @endif


    </header>
    <main class="w-full lg:max-w-4xl max-w-[335px]">
        @yield('content')
    </main>
</body>

</html>