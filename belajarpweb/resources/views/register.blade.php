@extends('components.template')

@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Register</h1>

        <form action="/home" method="GET" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold hover:bg-indigo-500 transition duration-300">
                Register
            </button>
        </form>

        @if($errors->any())
            <div class="mt-4 text-red-600 text-sm">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
    </div>
</div>
@endsection
