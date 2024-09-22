
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
    <header class="mt-16 text-6xl text-center text-[#0c6cb4]">Welcome to St. Urusla Academy</header>

    @if(Session::has('flash_message'))
        <div class="mx-96 mt-16 bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
            <p class="font-bold">{{ Session::get('flash_message') }}</p>
        </div>
    @endif

    <div x-data="{ school: 0 }">
        <div class="mt-16 ml-96 mr-96 text-center">
            <label for="schools"
                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white text-left">
                Select your school
            </label>
            <select id="schools"
                    x-model="school"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0">Select school</option>
                <option value="" disabled=""></option>
                @foreach($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="mt-16 ml-96 mr-96 relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="students" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3"></th>
                    <th scope="col" class="px-6 py-3 hidden">
                        School ID
                    </th>
                    <th scope="col" class="px-6 py-3 hidden">
                        Student ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Student Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        School Name
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr  x-show="school == 0" x-cloak class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4" colspan="5">
                        You must select your school first.
                    </td>
                </tr>
                @forelse($students as $student)
                    <tr  x-show="school == {{ $student->school_id }}" x-cloak class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4">
                            <a href="{{ route('student.edit', $student->id) }}" class="font-medium text-[#0c6cb4] hover:underline">Check In</a>
                        </td>
                        <td class="px-6 py-4 hidden">
                            {{ $student->school_id }}
                        </td>
                        <td class="px-6 py-4 hidden">
                            {{ $student->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->first_name }} {{ $student->last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $student->school->name }}
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4">
                            No students!
                        </td>
                    </tr>
                @endforelse
                <tr  x-show="school > 0" x-cloak class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <td class="px-6 py-4">
                        <a href="{{ route('student.create') }}" class="font-medium text-blue-700 hover:underline">Check In</a>
                    </td>
                    <td class="px-6 py-4" colspan="4">
                        If you name does not appear above, check-in here.
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="mt-16 mb-6 text-center text-sm text-gray-400">&copy; <?php echo date("Y"); ?> St. Ursula Academy</footer>
</div>
</body>
</html>
