@extends('layout.main')

@section('content')
<div style="position: relative; width: 100vw; height: 100vh; overflow: hidden;" class="bg-black">
    <img
        src="{{ asset('images/zona6.png') }}"
        alt="Background"
        class="block"
        style="width: 150%; height: 100%;"
    >

    <!-- Tombol Kembali -->
    <div style="position: absolute; top: 1rem; left: 1rem;">
        <a href="{{ route('dashboard') }}" class="flex items-center justify-center px-4 py-2 text-lg text-white bg-blue-400 border border-current rounded-xl">
            <span class="mr-2">&lt;</span> Kembali
        </a>
    </div>

    @php
        $slotPositions = [
            ['top' => '73%', 'left' => '6%'], // Slot 1
            ['top' => '73%', 'left' => '9.5%'], // Slot 2
            ['top' => '73%', 'left' => '13%'], // Slot 3
            ['top' => '73%', 'left' => '16.5%'], // Slot 4
        ];
    @endphp

    <div id="parking-slots">
    </div>
</div>

<!-- Tambahkan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Fungsi untuk memperbarui slot parkir
        function updateParkingSlots() {
            $.ajax({
                url: "{{ route('get.slot.parkir') }}",
                method: 'GET',
                success: function (data) {
                    // Hapus konten sebelumnya
                    $('#parking-slots').empty();

                    // Posisi koordinat slot parkir
                    let slotPositions = @json($slotPositions);

                    // Render ulang slot berdasarkan data
                    data.forEach(function (slot, index) {
                        if (slot.keterangan === 'Terisi') {
                            $('#parking-slots').append(`
                                <div style="position: absolute; top: ${slotPositions[index].top}; left: ${slotPositions[index].left};">
                                    <img src="{{ asset('images/mobil.png') }}" alt="Mobil" style="width: 50px; height: 80px;">
                                </div>
                            `);
                        }
                    });
                },
                error: function () {
                    console.error('Gagal memperbarui slot parkir.');
                }
            });
        }

        // Perbarui setiap 2 detik
        setInterval(updateParkingSlots, 2000);

        // Panggil fungsi pertama kali saat halaman dimuat
        updateParkingSlots();
    });
</script>
@endsection
