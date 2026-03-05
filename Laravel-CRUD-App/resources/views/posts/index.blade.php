@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 p-4 border border-black/10">

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Daftar Post Blog</h1>

            <a href="{{ route('post.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow">
                + Tambah Post
            </a>
        </div>

        <!-- List Post -->
        <div class="space-y-6">
            @foreach ($posts as $post)
                <div class="bg-white shadow-md rounded-xl p-6">

                    <h2 class="text-xl font-semibold mb-2">
                        {{ $post->title }}
                    </h2>

                    <p class="text-gray-600 mb-4">
                        {{ $post->content }}
                    </p>

                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-sm">
                            Hapus
                        </button>
                    </form>

                </div>
            @endforeach
        </div>

    </div>
@endsection
