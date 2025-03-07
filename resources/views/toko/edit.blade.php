<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Toko</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg shadow-lg">
            <div class="px-4 py-5 sm:px-6 border-b border-gray-200 bg-gray-50">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah Data Toko</h3>
                <p class="mt-1 text-sm text-gray-600">Silakan isi form dibawah ini dengan benar.</p>
            </div>

            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('toko.update', $toko->id) }}" method="POST" autocomplete="off">
                    @csrf
                    @method('PUT')
                    <div class="space-y-6">
                        <div class="relative">
                            <label for="nama_toko" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-store text-gray-400 mr-1"></i> Nama Toko
                            </label>
                            <input type="text" name="nama_toko" id="nama_toko" placeholder="Masukkan nama toko"
                                class="mt-1 block w-full px-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('nama_toko') border-red-500 @else border-gray-200 @enderror"
                                value="{{ old('nama_toko', $toko->nama_toko) }}">
                            @error('nama_toko')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-map-marker-alt text-gray-400 mr-1"></i> Alamat
                            </label>
                            <input type="text" name="alamat" id="alamat" placeholder="Masukkan alamat toko"
                                class="mt-1 block w-full px-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('alamat') border-red-500 @else border-gray-200 @enderror"
                                value="{{ old('alamat', $toko->alamat) }}">
                            @error('alamat')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="nomor_telepon" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-phone text-gray-400 mr-1"></i> Nomor Telepon
                            </label>
                            <input type="text" name="nomor_telepon" id="nomor_telepon"
                                placeholder="Masukkan nomor telepon"
                                class="mt-1 block w-full px-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('nomor_telepon') border-red-500 @else border-gray-200 @enderror"
                                value="{{ old('nomor_telepon', $toko->nomor_telepon) }}">
                            @error('nomor_telepon')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8 flex items-center justify-end space-x-4">
                        <a href="{{ route('toko.index') }}"
                            class="inline-flex items-center px-4 py-2 border-2 border-gray-300 rounded-lg text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 hover:border-gray-400 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali
                        </a>
                        <button type="submit"
                            class="inline-flex items-center px-6 py-2 border-2 border-transparent rounded-lg text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <i class="fas fa-save mr-2"></i>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
