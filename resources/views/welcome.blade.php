
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite('resources/css/app.css')

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <header class="mt-16 text-6xl text-center text-[#0c6cb4]">
        <p>Welcome to St. Urusla Academy</p>
        <div class="flex justify-center my-12">
            <a href="/">
                <x-sua-logo class="w-500 h-500 fill-current text-gray-500" />
            </a>
        </div>
    </header>

    <div class="mt-16 ml-96 mr-96 text-center">
        <a href="{{ route('student.index') }}" type="button" class="mt-4 rounded-md bg-[#0c6cb4] px-12 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Check In</a>

    </div>

    <footer class="mt-16 mb-6 text-center text-sm text-gray-400 fixed inset-x-0 bottom-0">&copy; <?php echo date("Y"); ?> St. Ursula Academy</footer>
</div>
</body>
</html>
