<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-left min-h-screen flex-col">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold mb-4">Danh sach phong tro</h1>
            <div>
                <input type="text" placeholder="Search..." class="border border-gray-300 rounded-lg p-2 m-4 mb-4"> 
                <button><a href="{{ route('motel.create') }}">create</a></button>
             </div>
            <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg">
                <thead>
                    <tr>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">STT</th>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ma phong tro</th>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ten nguoi thue tro</th>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">So dien thoai</th>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hinh thuc thanh toan</th>
                        <th class="px-6 py-3 p-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">/</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr class="bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->idMotel }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->nameMotel }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->phoneNumber }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->payment }}</td>
                            
                            <td class="px-6 py-4 whitespace-nowrap">
                                <button class="text-red-500 hover:text-red-700">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
