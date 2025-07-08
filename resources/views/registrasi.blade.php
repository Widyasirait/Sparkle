@extends('layout.auth')

@section('title', 'Registrasi - SPARKLE')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-b from-black to-blue-500">
        <div class="w-full max-w-md px-16 md:px-8 lg:max-w-lg">
            <div class="flex justify-center">
                <img src="images/icon.png" alt="Logo" class="w-64 h-auto md:w-32 md:h-32 lg:w-32 lg:h-32">
            </div>
            <h2 class="pb-4 text-3xl font-bold text-center text-white md:text-4xl lg:text-5xl">DAFTAR</h2>
            <form class="space-y-4" action="{{ route('registrasi.proses') }}" method="POST">
                @csrf
                <div>
                    @error('username')
                        <div class="mt-1 text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="username" class="sr-only">Nama Pengguna</label>
                    <input id="username" type="text" name="username" placeholder="Nama Pengguna"
                        value="{{ old('username') }}" required
                        class="w-full px-4 py-3 text-black placeholder-gray-500 bg-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 md:text-lg">
                </div>

                <div>
                    <label for="status" class="sr-only">Status Pengguna</label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-3 text-black placeholder-gray-500 bg-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 md:text-lg">
                        <option value="" disabled selected class="text-placeholder">Status Pengguna</option>
                        <option value="mahasiswa" class="text-black">Mahasiswa</option>
                        <option value="pegawai" class="text-black">Pegawai</option>
                    </select>
                </div>

                <div class="relative">
                    @error('password')
                        <div class="mb-1 text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="password" class="sr-only">Kata Sandi</label>
                    <input id="password" type="password" name="password" placeholder="Kata Sandi" required
                        value="{{ old('password') }}"
                        class="w-full px-4 py-3 text-black placeholder-gray-500 bg-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 md:text-lg">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePassword('password', 'eye')">
                        <svg id="eye" class="w-6 h-6 text-black hover:text-blue-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.254.815-.63 1.582-1.122 2.276M19.07 19.07A9.953 9.953 0 0112 21a9.954 9.954 0 01-7.071-2.929M9.88 9.88A3 3 0 1014.12 14.12">
                            </path>
                            <path id="eye-slash" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M3 3l18 18M15.6 15.6A5 5 0 119.4 9.4m5.6 6.2L9.4 9.4"></path>
                        </svg>
                    </span>
                </div>

                <!-- Password Confirmation Field -->
                <div class="relative">
                    @error('password_confirmation')
                        <div class="mt-1 text-red-500">{{ $message }}</div>
                    @enderror
                    <label for="password_confirmation" class="sr-only">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        placeholder="Konfirmasi Kata Sandi" required
                        class="w-full px-4 py-3 text-black placeholder-gray-500 bg-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 md:text-lg">
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePassword('password_confirmation', 'eye-confirm')">
                        <svg id="eye-confirm" class="w-6 h-6 text-black hover:text-blue-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.254.815-.63 1.582-1.122 2.276M19.07 19.07A9.953 9.953 0 0112 21a9.954 9.954 0 01-7.071-2.929M9.88 9.88A3 3 0 1014.12 14.12">
                            </path>
                            <path id="eye-slash" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M3 3l18 18M15.6 15.6A5 5 0 119.4 9.4m5.6 6.2L9.4 9.4"></path>
                        </svg>
                    </span>
                </div>


                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full py-3 font-bold text-white bg-blue-400 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 md:text-lg">
                        DAFTAR
                    </button>
                </div>
            </form>

            <div class="py-2 text-sm text-center text-gray-300 md:text-base">
                Sudah memiliki akun?
                <a href="{{ route('login') }}" class="font-semibold text-blue-400 hover:underline">MASUK</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            const isPassword = input.type === 'password';
            input.type = isPassword ? 'text' : 'password';
            const paths = icon.querySelectorAll('path');
            paths.forEach(path => path.classList.toggle('hidden', isPassword));
        }
    </script>
@endsection
