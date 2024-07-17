@extends('layouts.app')

@section('Title', 'Search Results')

@section('contents')
<div class="container mx-auto mt-8 p-6 bg-white rounded shadow-lg">
    <h2 class="text-2xl font-semibold mb-6">Search Results for "{{ $query }}"</h2>

    @if($products->isEmpty())
        <p class="text-gray-500">No products found.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($products as $product)
                <div class="border p-4 rounded shadow hover:shadow-lg transition">
                    <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                    <p class="text-gray-700">{{ $product->description }}</p>
                    <p class="text-gray-900 font-bold mt-2">${{ $product->price }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
