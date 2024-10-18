@extends('components.template')

@section('title', 'Homepage')

@section('content')
<div class="flex flex-col justify-center items-center h-screen bg-blue-500 text-white">
    <div class="text-center">
        <h2 class="text-4xl font-bold mb-4">Hallo, Selamat Datang</h2>
        <a href="/register" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-200 transition duration-300">Start</a>
    </div>
</div>
@endsection
