@extends('layouts.app')

@section('title', 'Create DataUser')

@section('contents')
<h1 class="font-bold text-2xl text-center mt-6">Create DataUser</h1>
<hr class="my-4" />
<div class="flex justify-center">
    <div class="border-b border-gray-900/10 pb-12 w-full max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <form action="{{ route('datausers.store') }}" method="POST" class="col-span-6">
                @csrf
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                        <input type="text" name="Nama" id="Nama" value="{{ old('Nama') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('Nama') border-red-500 @enderror">
                        @error('Nama')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nama Almarhum</label>
                    <div class="mt-2">
                        <input id="Nama_Alm" name="Nama_Alm" type="text" value="{{ old('Nama_Alm') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('Nama_Alm') border-red-500 @enderror">
                        @error('Nama_Alm')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                    <div class="mt-2">
                        <input id="Alamat" name="Alamat" type="text" value="{{ old('Alamat') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('Alamat') border-red-500 @enderror">
                        @error('Alamat')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nomor KTP</label>
                    <div class="mt-2">
                        <input id="No_ktp" name="No_ktp" type="text" value="{{ old('No_ktp') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('No_ktp') border-red-500 @enderror">
                        @error('No_ktp')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nomor Kartu Keluarga</label>
                    <div class="mt-2">
                        <input id="No_Kk" name="No_Kk" type="text" value="{{ old('No_Kk') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('No_Kk') border-red-500 @enderror">
                        @error('No_Kk')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Nomor Telepon</label>
                    <div class="mt-2">
                        <input id="No_telepon" name="No_telepon" type="text" value="{{ old('No_telepon') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('No_telepon') border-red-500 @enderror">
                        @error('No_telepon')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                    <div class="mt-2">
                        <input id="Email" name="Email" type="text" value="{{ old('Email') }}" class="block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-600 focus:ring focus:ring-indigo-600 focus:ring-opacity-75 @error('Email') border-red-500 @enderror">
                        @error('Email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <button type="submit" class="flex w-full justify-center mt-6 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
