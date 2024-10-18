@extends('components.template')

@section('title', 'Homepage')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-6">Homepage</h1>
    <p class="text-center text-lg mb-8">Selamat Datang</p>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
            <thead class="bg-indigo-600 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">No.</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">{{ $contact['name'] }}</td>
                        <td class="px-4 py-2">{{ $contact['email'] }}</td>
                        <td class="px-4 py-2">{{ $contact['phone'] }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
