<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add Car</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="manifest" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="mask-icon" href="{{ asset('storage/image/LogoMitsubishi.png') }}" color="#0077c1">
    <meta name="msapplication-TileColor" content="#0077c1">
    <meta name="theme-color" href="#ffffff">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-fixed bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('storage/image/tire.jpeg') }}');">
    <div class="container mx-auto mt-10 mb-10 px-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <h1 class="text-3xl font-bold text-blue drop-shadow-lg mb-6 text-left">
                CREATE NEW PRODUCT
            </h1>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-5">
                    <label for="name">Name</label>
                    <input type="text" class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded-full
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    " name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="code">Code</label>
                    <input type="text" class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded-full
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    " name="code" value="{{ old('code') }}" required>
                    @error('code')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="price">Price</label>
                    <input type="text" class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded-full
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    " name="price" value="{{ old('price') }}" required>
                    @error('price')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="stock">Stock</label>
                    <input type="text" class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded-full
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                    " name="stock" value="{{ old('stock') }}" required>
                    @error('stock')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="image" class="block font-semibold mb-1">Product Image</label>
                    <input type="file" name="image" accept="image/*"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
                        file:rounded-full file:border-0 file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('image')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mt-3">
                    <button type="submit"
                        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
                        leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg
                        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800
                        active:shadow-lg transition duration-150 ease-in-out">
                        Save
                    </button>
                    <a href="{{ route('product.index') }}"
                        class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs
                        leading-tight uppercase rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg
                        focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400
                        active:shadow-lg transition duration-150 ease-in-out">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
