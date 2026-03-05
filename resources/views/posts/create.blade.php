@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 px-4">

        <h1 class="text-3xl font-bold mb-6">Buat Artikel</h1>

        <div class="bg-white shadow-md rounded-xl p-6">

            <form action="{{ route('post.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Judul -->
                <div>
                    <label class="block mb-2 font-medium">Judul</label>
                    <input type="text" name="title"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Masukkan judul artikel...">
                </div>

                <!-- Content -->
                <div>
                    <label class="block mb-2 font-medium">Content</label>
                    <textarea name="content" rows="5"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Tulis isi artikel..."></textarea>
                </div>

                <!-- Button -->
                <div class="flex justify-between items-center">

                    <a href="{{ route('post.index') }}" class="text-gray-500 hover:underline">
                        ← Kembali
                    </a>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded-lg shadow">
                        Simpan Artikel
                    </button>

                </div>

            </form>

        </div>

    </div>
@endsection
