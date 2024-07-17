@extends('layouts.app')

@section('title', 'Home DataUser List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Data Users</h1>
    <a href="{{ route('admin.datauser.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create New DataUser</a>
    <hr />

    <!-- Display Success Message -->
    @if ($message = Session::get('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Search Form -->
    <form method="GET" action="{{ route('search') }}" class="mb-4">
        <input type="text" name="search" class="border border-gray-300 rounded-md px-3 py-2" placeholder="Search data users..." value="{{ request('search') }}">
        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white">Search</button>
    </form>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Nama Almarhum</th>
                <th scope="col" class="px-6 py-3">Alamat</th>
                <th scope="col" class="px-6 py-3">No KTP</th>
                <th scope="col" class="px-6 py-3">Nomor Kartu Keluarga</th>
                <th scope="col" class="px-6 py-3">Nomor telepon</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($datausers as $datauser)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">{{ $datauser->Nama }}</td>
                    <td class="px-6 py-4">{{ $datauser->Nama_Alm }}</td>
                    <td class="px-6 py-4">{{ $datauser->Alamat }}</td>
                    <td class="px-6 py-4">{{ $datauser->No_ktp }}</td>
                    <td class="px-6 py-4">{{ $datauser->No_Kk }}</td>
                    <td class="px-6 py-4">{{ $datauser->No_telepon }}</td>
                    <td class="px-6 py-4">{{ $datauser->Email }}</td>
                    <td class="px-6 py-4 w-36">
                        <div class="flex space-x-2">
                            <a href="{{ route('datausers.show', $datauser->id) }}" class="text-blue-800">Show</a>
                            <a href="javascript:void(0)" onclick="openEditModal('{{ $datauser->id }}')" class="text-green-800">Edit</a>
                            <a href="javascript:void(0)" onclick="openDeleteModal('{{ $datauser->id }}')" class="text-red-800">Delete</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center px-6 py-4" colspan="9">No data users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Edit DataUser</h2>
        <p id="editConfirmation" class="mb-4">Are you sure you want to edit this data?</p>
        <button onclick="closeModal('editModal')" class="mr-2 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md">Cancel</button>
        <a id="editConfirmationLink" href="#" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-md text-white">Edit</a>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Delete DataUser</h2>
        <p>Are you sure you want to delete this data user?</p>
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

    function openEditModal(dataUserId) {
        // Display confirmation message within the edit modal
        document.getElementById('editConfirmation').innerText = "Are you sure you want to edit this data?";
        document.getElementById('editConfirmationLink').setAttribute('href', `/admin/datausers/edit/${dataUserId}`);
        openModal('editModal');
    }

    function openDeleteModal(dataUserId) {
        document.getElementById('deleteForm').action = `/admin/datausers/destroy/${dataUserId}`;
        openModal('deleteModal');
    }
</script>
@endsection
