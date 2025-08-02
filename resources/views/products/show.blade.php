    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Detail: {{ $product->name }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
        <link rel="manifest" href="{{ asset('storage/image/LogoMitsubishi.png') }}">
        <link rel="mask-icon" href="{{ asset('storage/image/LogoMitsubishi.png') }}" color="#0077c1">
        <meta name="msapplication-TileColor" content="#0077c1">
        <meta name="theme-color" href="#ffffff">
        <script src="https://cdn.tailwindcss.com"></script>
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
    </head>
    <body class="bg-fixed bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('storage/image/tire.jpeg') }}');">
        

        <div class="container mx-auto px-4 py-10">
            <!-- Header -->
            <div class="bg-white p-6 ">
                <h1 class="text-3xl font-bold text-blue drop-shadow-lg">Detail Produk: {{ $product->name }}</h1>
            </div>

            <!-- Detail Box -->
            <div class="bg-white p-6">
                <table class="w-full text-sm text-left text-gray-700">
                    <tbody class="divide-y divide-gray-100">
                        <tr>
                            <th class="py-3 font-medium">Image (Klik Gambar Untuk Detail)</th>
                            <td class="py-3">
                                @if ($product->image)
                                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover rounded shadow cursor-pointer" onclick="openModal(this.src)">
                                @else
                                    <span class="italic text-gray-500">No image uploaded</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th class="w-1/3 py-3 font-medium">Product Name</th>
                            <td class="py-3">{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <th class="py-3 font-medium">Product Code</th>
                            <td class="py-3">{{ $product->code }}</td>
                        </tr>
                        <tr>
                            <th class="py-3 font-medium">Stock</th>
                            <td class="py-3">{{ $product->stock }}</td>
                        </tr>
                        <tr>
                            <th class="py-3 font-medium">Price</th>
                            <td class="py-3">{{ $product->price }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex gap-3">
                <a href="{{ route('product.index') }}"
                class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-5 py-2 rounded transition">
                    ← Back
                </a>
                <a href="{{ route('product.edit', $product) }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded transition">
                    ✎ Edit
                </a>
            </div>
        </div>

        <!-- Modal for Fullscreen Image -->
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage" />
        </div>

        <script>
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

    </body>
    </html>
