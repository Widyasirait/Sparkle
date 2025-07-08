@extends('layout.main')

@section('content')
<div class="overflow-scroll" style="width: 100vw; height: 100vh;">
    <img
        src="{{ asset('images/zona3.png') }}"
        alt="Background"
        class="block"
        style="width: 150%; height: 100%;"
    >
    <!-- Tombol Kembali -->
    <div class="absolute top-4 left-4">
        <a href="{{ route('dashboard') }}" class="flex items-center justify-center px-4 py-2 text-lg text-white bg-blue-400 border border-current rounded-xl">
            <span class="mr-2">&lt;</span> Kembali
        </a>
    </div>
</div>
@endsection
