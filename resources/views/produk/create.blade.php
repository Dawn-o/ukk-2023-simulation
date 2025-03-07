<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Produk</title>
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
                <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah Data Produk</h3>
                <p class="mt-1 text-sm text-gray-600">Silakan isi form dibawah ini dengan benar.</p>
            </div>

            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('produk.store', $toko_id) }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="space-y-6">
                        <div class="relative">
                            <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-box text-gray-400 mr-1"></i> Nama Produk
                            </label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Masukkan nama produk"
                                class="mt-1 block w-full px-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('nama_produk') border-red-500 @else border-gray-200 @enderror"
                                value="{{ old('nama_produk') }}">
                            @error('nama_produk')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-tag text-gray-400 mr-1"></i> Harga
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                                    Rp
                                </span>
                                <input type="number" name="harga" id="harga" placeholder="Masukkan harga produk"
                                    class="mt-1 block w-full pl-12 pr-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('harga') border-red-500 @else border-gray-200 @enderror"
                                    value="{{ old('harga') }}" min="0">
                            </div>
                            @error('harga')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-cubes text-gray-400 mr-1"></i> Stok
                            </label>
                            <input type="number" name="stok" id="stok" placeholder="Masukkan jumlah stok"
                                class="mt-1 block w-full px-4 py-3 rounded-lg border-2 bg-white focus:ring-0 focus:border-indigo-500 transition-colors duration-200 ease-in-out @error('stok') border-red-500 @else border-gray-200 @enderror"
                                value="{{ old('stok') }}" min="0">
                            @error('stok')
                                <p class="mt-1 text-sm text-red-500 flex items-center">
                                    <i class="fas fa-exclamation-circle mr-1"></i>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-8 flex items-center justify-end space-x-4">
                        <a href="{{ route('toko.show', $toko_id) }}"
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
