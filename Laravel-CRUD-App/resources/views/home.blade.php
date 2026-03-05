@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center max-w-4xl mx-auto mt-10 p-4 border border-black/10 space-y-2">
        <div class="flex flex-col justify-center items-start gap-2 bg-amber-50">
            <h1 class="text-3xl font-bold">Halaman Homepage</h1>
            <p class="text-lg">Ini Project Blog Post Sederhana</p>
            <div class="flex justify-center items-start gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                </svg>
                <span>Credit: DIF</span>
            </div>
        </div>

        <a href="{{ route('post.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg shadow">
            Halaman Post
        </a>

    </div>
@endsection
