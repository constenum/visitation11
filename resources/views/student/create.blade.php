
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite('resources/css/app.css')
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <header class="mt-16 text-6xl text-center text-[#0c6cb4]">Welcome to St. Urusla Academy</header>

    <div class="mt-16 ml-96 mr-96 text-center">
        <form method="POST" action="/student">
            {{ csrf_field() }}

            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-6">
                        <label for="school_id" class="block text-sm font-medium leading-6 text-gray-900">School</label>
                        <div class="mt-2">
                            <select id="school_id" name="school_id" class="flex w-full rounded-md border-0 px-3 py-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="">Select school</option>
                                <option value="" disabled=""></option>
                                @foreach($schools as $school)
                                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                        <div class="mt-2">
                            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-5">
                        <label for="street_address" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
                        <div class="mt-2">
                            <input type="text" name="street_address" id="street_address" value="{{ old('street_address') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-1">
                        <label for="apt_suite" class="block text-sm font-medium leading-6 text-gray-900">Apt/Lot</label>
                        <div class="mt-2">
                            <input type="text" name="apt_suite" id="apt_suite" value="{{ old('apt_suite') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" value="{{ old('city') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State</label>
                        <div class="mt-2">
                            <input type="text" name="state" id="state" value="{{ old('state') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="zip_code" class="block text-sm font-medium leading-6 text-gray-900">ZIP code</label>
                        <div class="mt-2">
                            <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" class="block w-full rounded-md border-0 px-3 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('student.index') }}" type="button" class="mr-4 rounded-md bg-white px-6 py-3 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Back</a>
            <button type="submit" class="mt-4 rounded-md bg-[#0c6cb4] px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Check In</button>
        </form>
    </div>

    <footer class="mt-16 mb-6 text-center text-sm text-gray-400 fixed inset-x-0 bottom-0">&copy; <?php echo date("Y"); ?> St. Ursula Academy</footer>
</div>
</body>
</html>
