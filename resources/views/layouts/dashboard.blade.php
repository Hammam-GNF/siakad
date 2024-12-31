<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css') <!-- Laravel Vite untuk mengelola asset CSS -->
</head>
<body class="font-sans bg-gray-100">

    <!-- Sidebar and Content Wrapper -->
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white h-screen">
            <div class="p-4">
                <h2 class="text-2xl font-bold">Dashboard</h2>
            </div>
            <nav class="mt-5">
                <ul>
                    <li><a href="{{ route('siswa.index') }}" class="block px-4 py-2 hover:bg-gray-700">Daftar Siswa</a></li>
                    <li><a href="{{ route('mapel.index') }}" class="block px-4 py-2 hover:bg-gray-700">Daftar Mapel</a></li>
                    <li><a href="{{ route('ujian.index') }}" class="block px-4 py-2 hover:bg-gray-700">Daftar Ujian</a></li>
                    <li><a href="{{ route('peserta.index') }}" class="block px-4 py-2 hover:bg-gray-700">Daftar Peserta</a></li>
                    
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-6">
            <!-- Navbar -->
            <div class="bg-white p-4 shadow-md mb-6 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Welcome</h1>
                <!-- <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Log Out</button> -->
            </div>

            <!-- Content Area -->
            <div class="bg-white p-6 rounded shadow-md">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-6">
        <p>&copy; {{ date('Y') }} Your Company. All Rights Reserved.</p>
    </footer>
    
</body>
</html>
