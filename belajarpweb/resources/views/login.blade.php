@extends('components.template')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Login</h1>

        <form from action="/home" method="GET">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold hover:bg-indigo-500 transition duration-300">Login</button>
        </form>

        @if($errors->any())
            <div class="mt-4 text-red-600 text-sm">
                <p>{{ $errors->first() }}</p>
            </div>
        @endif
    </div>
</div>
@endsection
