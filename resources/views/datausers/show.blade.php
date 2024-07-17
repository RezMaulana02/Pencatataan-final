@extends('layouts.app')

@section('title', 'Show DataUser')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail DataUser</h1>
<hr />

<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
            <div class="mt-2">
                {{ $datauser->nama }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nama Makam</label>
            <div class="mt-2">
                {{ $datauser->nama_makam }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Jumlah Pembayaran</label>
            <div class="mt-2">
                {{ $datauser->jumlah_pembayaran }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Status Pembayaran</label>
            <div class="mt-2">
                {{ $datauser->status_pembayaran }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Lokasi Makam</label>
            <div class="mt-2">
                {{ $datauser->lokasi_makam }}
            </div>
        </div>
    </div>
</div>

<div class="mt-6">
    <a href="{{ route('datausers.index') }}" class="text-blue-700 hover:text-blue-900">Back</a>
    <a href="{{ route('datausers.edit', $datauser->id) }}" class="ml-4 text-green-700 hover:text-green-900">Edit</a>

    <form action="{{ route('datausers.destroy', $datauser->id) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="ml-4 text-red-700 hover:text-red-900">Delete</button>
    </form>
</div>
@endsection
