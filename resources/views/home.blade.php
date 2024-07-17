@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">

        </h1>
    </div>
</header>
<hr />
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0 text-center">
            <div class="text-5xl">
                Sistem Pencatatan Kematian Kota Bandung
            </div>
            <div class="mt-4 text-sm text-gray-700">
                Deskripsi untuk Sistem Pencatatan Kematian Kota Bandung. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac dignissim ante. Integer varius sit amet ex eget aliquam. Maecenas auctor, libero sed aliquam congue, turpis urna aliquet est, eget convallis enim elit id libero.
            </div>
        </div>
    </div>



            <div class=" flex justify-center items-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Get Started
                </button>
            </div>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 flex justify-center items-center">
                <div class="px-4 py-6 sm:px-0">
                    <div class="text-4xl">
                        Jenis Layanan
                    </div>
                </div>
            </div>
            <div class="mt-8 grid grid-cols-2 gap-4 mb-4">
                <div class="card p-6 rounded-lg border border-gray-300 text-center">
                    <div class="text-black font-bold">Pemakaman Baru</div>
                    <div class="text-black text-sm mt-2">Deskripsi untuk Layanan 1</div>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Lihat Selengkapnya</a>
                </div>
                <div class="card p-6 rounded-lg border border-gray-300 text-center">
                    <div class="text-black font-bold">Her Registrasi</div>
                    <div class="text-black text-sm mt-2">Deskripsi untuk Layanan 2</div>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Lihat Selengkapnya</a>
                </div>
                <div class="card p-6 rounded-lg border border-gray-300 text-center">
                    <div class="text-black font-bold">Pencarian Makam</div>
                    <div class="text-black text-sm mt-2">Deskripsi untuk Layanan 3</div>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Lihat Selengkapnya</a>
                </div>
                <div class="card p-6 rounded-lg border border-gray-300 text-center">
                    <div class="text-black font-bold">Info TPU</div>
                    <div class="text-black text-sm mt-2">Deskripsi untuk Layanan 4</div>
                    <a href="#" class="text-blue-500 mt-2 inline-block">Lihat Selengkapnya</a>
                </div>
            </div>









</main>
@endsection
