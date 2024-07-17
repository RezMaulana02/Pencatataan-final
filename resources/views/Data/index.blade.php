@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
<div>

    <h1 class="font-bold text-2xl ml-3">Home List</h1>
    <a href="{{ route('admin/products/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New Data</a>
    <hr />

    <x-notify::notify />

    <!-- Search Form -->
    <form method="GET" action="{{ route('admin/products') }}" class="mb-4">
        <input type="text" name="search" class="border border-gray-300 rounded-md px-3 py-2" placeholder="Search Data..." value="{{ request('search') }}">
        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white">Search</button>
    </form>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3">Product Code</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0)
            @foreach($products as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->name }}
                </td>
                <td>
                    {{ $rs->price }}
                </td>
                <td>
                    {{ $rs->product_code }}
                </td>
                <td>
                    {{ $rs->description }}
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/products/show', $rs->id) }}" class="text-blue-800">Detail</a> |
                        <a href="javascript:void(0)" onclick="openEditModal('{{ $rs->id }}')" class="text-green-800 pl-2">Edit</a> |
                        <a href="javascript:void(0)" onclick="openDeleteModal('{{ $rs->id }}')" class="text-red-800 pl-2">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="6">Product not found</td> <!-- Updated colspan to 6 -->
            </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Edit Product</h2>
        <p id="editConfirmation" class="mb-4">Apakah Anda ingin mengedit data ini?</p>
        <button onclick="closeModal('editModal')" class="mr-2 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md">Cancel</button>
        <a id="editConfirmationLink" href="#" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-md text-white">Edit</a>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Delete Product</h2>
        <p>Are you sure you want to delete this product?</p>
        <form id="deleteForm" action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-4 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white">Delete</button>
            <button type="button" onclick="closeModal('deleteModal')" class="mt-4 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md">Cancel</button>
        </form>
    </div>
</div>

<!-- JavaScript -->
<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
    }

    function openEditModal(productId) {
        // Display confirmation message within the edit modal
        document.getElementById('editConfirmation').innerText = "Apakah Anda ingin mengedit data ini?";
        document.getElementById('editConfirmationLink').setAttribute('href', `/admin/products/edit/${productId}`);
        openModal('editModal');
    }

    function openDeleteModal(productId) {
        document.getElementById('deleteForm').action = `/admin/products/destroy/${productId}`;
        openModal('deleteModal');
    }
</script>
@endsection
