@extends('main')

@section('container')

    <div class="text-center mb-4">
        <h3>Nilai Tes Kamu Adalah </h3>
        95
    </div>
    <div class="d-flex justify-content-center">
        @if (($nilai >= 0) and ($nilai <= 70))
            <div>

                Mohon Maaf Kamu Belum Lolos.
            </div>
        @else
            <div>
                Selamat Kamu Diterima Masuk Universitas Bina Nusantara.
            </div>
        @endif
    </div>

@endsection
