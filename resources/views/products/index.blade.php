<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Showroom Car</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="manifest" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="mask-icon" href="{{ asset('storage/image/LogoMitsubishi.png') }}" color="#0077c1">
    <meta name="msapplication-TileColor" content="#0077c1">
    <meta name="theme-color" href="#ffffff">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-fixed bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('storage/image/logobesi.jpg') }}');">

    <div class="bg-gray-200 bg-opacity-50 min-h-screen">
        <div class="container mx-auto px-4 py-10">

            <!-- Header -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                <h1 class="text-3xl font-bold text-black drop-shadow-lg">Daftar Mobil</h1>

                <!-- Search and Buttons -->
                <div class="flex items-center gap-2 flex-wrap">
                    <!-- Search Form -->
                    <form action="{{ route('product.index') }}" method="GET" class="flex items-center gap-2">
                        <input type="text" name="search" placeholder="Cari..."
                            value="{{ request('search') }}"
                            class="w-40 px-3 py-2 text-sm rounded-full border border-gray-300 focus:outline-none focus:ring focus:border-[#e60012]" />
                        <button type="submit" class="bg-[#e60012] text-white px-3 py-2 rounded-full hover:bg-[#c4000f] transition text-sm flex items-center">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>

                    <!-- Back Button -->
                    <a href="{{ route('product.index') }}" class="bg-[#e60012] text-white px-3 py-2 rounded-full hover:bg-[#c4000f] transition text-sm flex items-center" title="Kembali">
                        <i class="bi bi-arrow-left"></i>
                    </a>

                    <!-- Add Product Button -->
                    <a href="{{ route('product.create') }}" class="bg-[#e60012] text-white px-3 py-2 rounded-full hover:bg-[#c4000f] transition text-sm flex items-center gap-1" title="Tambah Produk">
                        <i class="bi bi-plus-lg"></i>
                    </a>

                    <!-- Button to Welcome Page -->
                    <a href="{{ route('welcome') }}" class="bg-[#e60012] text-white px-3 py-2 rounded-full hover:bg-[#c4000f] transition text-sm flex items-center" title="Welcome">
                        <i class="bi bi-house"></i> Welcome
                    </a>
                </div>
            </div>

            <!-- Flash Message -->
            @if (session('success'))
                <div class="bg-green-500 text-white px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($products as $product)
                    <div class="bg-white rounded-lg shadow p-4">
                        <div class="flex flex-col items-center">
                            @if($product->image)
                                <img src="{{ asset('images/' . $product->image) }}" class="h-48 w-full object-cover rounded" alt="image">
                            @else
                                <span class="text-gray-400 italic">No Image</span>
                            @endif
                            <h2 class="mt-4 text-lg font-semibold">{{ $product->name }}</h2>
                            <p class="text-gray-600">Code: {{ $product->code }}</p>
                            <p class="text-gray-600">Stock: {{ $product->stock }}</p>
                            <p class="text-gray-800 font-bold mt-2">Price: Rp.{{ number_format($product->price, 2) }}</p>
                            <div class="flex flex-wrap gap-2 mt-4">
                                <a href="{{ route('product.show', $product) }}" class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold px-3 py-2 rounded flex items-center gap-1">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="{{ route('product.edit', $product) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold px-3 py-2 rounded flex items-center gap-1">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form onsubmit="return confirm('Apakah Anda yakin?');" action="{{ route('product.destroy', $product) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-3 py-2 rounded flex items-center gap-1">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center py-4 text-gray-500">Data kosong</div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>

</body>
</html>
