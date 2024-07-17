@extends('layouts.app')

@section('title', 'Master Pembayaran')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Master Pembayaran</h1>
    <a href="{{ route('admin.payments.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah Pembayaran Baru</a>
    <hr />

    <!-- Display Success Message -->
    @if ($message = Session::get('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <!-- Search Form -->
    <form method="GET" action="{{ route('search') }}" class="mb-4">
        <input type="text" name="search" class="border border-gray-300 rounded-md px-3 py-2" placeholder="Cari pembayaran..." value="{{ request('search') }}">
        <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-md text-white">Cari</button>
    </form>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Nama Pengguna</th>
                <th scope="col" class="px-6 py-3">Jumlah</th>
                <th scope="col" class="px-6 py-3">Tanggal Pembayaran</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($payments as $payment)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">{{ $payment->user->name }}</td>
                    <td class="px-6 py-4">{{ $payment->amount }}</td>
                    <td class="px-6 py-4">{{ $payment->payment_date }}</td>
                    <td class="px-6 py-4 w-36">
                        <div class="flex space-x-2">
                            <a href="{{ route('admin.payments.show', $payment->id) }}" class="text-blue-800">Tampilkan</a>
                            <a href="javascript:void(0)" onclick="openEditModal('{{ $payment->id }}')" class="text-green-800">Edit</a>
                            <a href="javascript:void(0)" onclick="openDeleteModal('{{ $payment->id }}')" class="text-red-800">Hapus</a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center px-6 py-4" colspan="5">Tidak ada data pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Edit Modal -->
<div id="editModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Edit Pembayaran</h2>
        <p id="editConfirmation" class="mb-4">Apakah Anda yakin ingin mengedit pembayaran ini?</p>
        <button onclick="closeModal('editModal')" class="mr-2 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md">Batal</button>
        <a id="editConfirmationLink" href="#" class="px-4 py-2 bg-green-500 hover:bg-green-600 rounded-md text-white">Edit</a>
    </div>
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Hapus Pembayaran</h2>
        <p>Apakah Anda yakin ingin menghapus data pembayaran ini?</p>
        <form id="deleteForm" action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="mt-4 px-4 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white">Hapus</button>
            <button type="button" onclick="closeModal('deleteModal')" class="mt-4 px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded-md">Batal</button>
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

    function openEditModal(paymentId) {
        // Tampilkan pesan konfirmasi dalam modal edit
        document.getElementById('editConfirmation').innerText = "Apakah Anda yakin ingin mengedit pembayaran ini?";
        document.getElementById('editConfirmationLink').setAttribute('href', `/admin/payments/edit/${paymentId}`);
        openModal('editModal');
    }

    function openDeleteModal(paymentId) {
        document.getElementById('deleteForm').action = `/admin/payments/destroy/${paymentId}`;
        openModal('deleteModal');
    }
</script>
@endsection
