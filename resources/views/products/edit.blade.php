<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Car Prod</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="manifest" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
    <link rel="mask-icon" href="{{ asset('storage/image/LogoMitsubishi.png') }}" color="#0077c1">
    <meta name="msapplication-TileColor" content="#0077c1">
    <meta name="theme-color" href="#ffffff">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                document.getElementById('previewContainer').style.display = 'block'; // Show preview container
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                imagePreview.src = '';
                document.getElementById('previewContainer').style.display = 'none'; // Hide preview container
            }
        }

        // Function to open the modal
        function openModal(src) {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            modal.style.display = "block";
            modalImage.src = src;
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }

        // Close the modal when clicking anywhere outside of the image
        window.onclick = function(event) {
            const modal = document.getElementById("imageModal");
            if (event.target == modal) {
                closeModal();
            }
        }
    </script>
</head>
<body class="bg-fixed bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('storage/image/tire.jpeg') }}');">
    <div class="container mx-auto px-4 py-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Edit Product</h1>

            <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="mb-5">
                    <label for="name" class="block font-semibold mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Code (readonly) -->
                <div class="mb-5">
                    <label for="code" class="block font-semibold mb-1">Code</label>
                    <input type="text" name="code" value="{{ old('code', $product->code) }}" readonly
                        class="block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg">
                    @error('code')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Price -->
                <div class="mb-5">
                    <label for="price" class="block font-semibold mb-1">Price</label>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}" required
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('price')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Stock -->
                <div class="mb-5">
                    <label for="stock" class="block font-semibold mb-1">Stock</label>
                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" required
                        class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('stock')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-5"> 
                    <label for="image" class="block font-semibold mb-1">Product Image</label>
                    <input type="file" name="image" accept="image/*" onchange="previewImage(event)"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 
                        file:rounded-full file:border-0 file:text-sm file:font-semibold
                        file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('image')
                        <div class="text-red-600 mt-2">{{ $message }}</div>
                    @enderror

                    @if($product->image)
                        <div class="mt-4">
                            <p class="text-sm text-gray-600">Klik Untuk Preview Gambar:</p>
                            <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="w-40 mt-2 rounded shadow cursor-pointer" onclick="openModal(this.src)">
                        </div>
                    @endif

                    <!-- Preview Image -->
                    <div class="mt-4" id="previewContainer" style="display: none;">
                        <p class="text-sm text-gray-600">Preview Image:</p>
                        <img id="imagePreview" alt="Image Preview" class="w-40 mt-2 rounded shadow cursor-pointer" onclick="openModal(this.src)">
                    </div>
                </div>

                <!-- Buttons -->
                <div class="mt-6">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-6 rounded-lg">
                        Save Changes
                    </button>
                    <a href="{{ route('product.index') }}"
                        class="ml-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-6 rounded-lg">
                        Back
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal for Fullscreen Image -->
    <div id="imageModal" class="modal" style="display: none;">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage" />
    </div>

    <style>
        /* Style untuk modal fullscreen */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>

</body>
</html>
