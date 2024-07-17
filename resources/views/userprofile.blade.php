@extends('layouts.app')

@section('title', 'Profile Settings')

@section('contents')
<hr />
<div class="container mx-auto mt-8 p-6 bg-white rounded shadow-lg">
    <h2 class="text-2xl font-semibold mb-6 text-center">Profile Settings</h2>
    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" enctype="multipart/form-data" action="{{ route('updateProfile') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Name
            </label>
            <input name="name" type="text" value="{{ auth()->user()->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" />
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input name="email" type="text" value="{{ auth()->user()->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" />
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Save Profile
            </button>
        </div>
    </form>
</div>
@endsection
