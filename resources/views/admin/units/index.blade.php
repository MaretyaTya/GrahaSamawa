@extends('layout.master')

@section('content')
    <div class="my-3">
        <h2>Selamat Datang, Admin</h2>
    </div>
    <hr>
    <div class="row">
        <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
            <div class="card flex-fill">
                <div class="card-body card-unit">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h1>{{ $totalUnits }}</h1>
                            <p>Total Unit Properti</p>
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-building-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer text-center">
                    <a href="dataunit.html">Lihat Detail <i class="bi bi-arrow-right-circle-fill ms-1"></i></a>
                </div> --}}
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
            <div class="card flex-fill">
                <div class="card-body card-unit">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h1>{{ $totalVisitors }}</h1>
                            <p>Total Pengunjung</p>
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-people-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer text-center">
                    <a href="dataunit.html">Lihat Detail <i class="bi bi-arrow-right-circle-fill ms-1"></i></a>
                </div> --}}
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
            <div class="card flex-fill">
                <div class="card-body card-unit">
                    <div class="row">
                        <div class="col-6 text-start">
                            @foreach ($brochure as $b)
                                <h1>{{ $b->download_count }}</h1>
                                <p>Total Unduh Brosur</p>
                            @endforeach
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-file-earmark-arrow-down-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-footer text-center">
                    <a href="dataunit.html">Lihat Detail <i class="bi bi-arrow-right-circle-fill ms-1"></i></a>
                </div> --}}
            </div>
        </div>
    </div>

    <hr>

    <div class="card border-1">

        <div class="card-header title-card d-flex">
            <div class="me-2">
                <span>Riwayat Perubahan</span>
            </div>
            <div>
                <a href="/admin/units" class="btn btn-info btn-sm text-bg-info">Lihat selengkapnya</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Unit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kamar Tidur</th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Carport</th>
                        <th scope="col">Luas Tanah</th>
                        <th scope="col">Luas Bangunan</th>
                        <th scope="col">Spesifikasi</th>
                        {{-- <th scope="col">Aksi</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($units as $unit)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $unit->nama_unit }}</td>
                            <td>Rp {{ number_format($unit->harga, 0, ',', '.') }}</td>
                            <td>{{ $unit->kamar_tidur }}</td>
                            <td>{{ $unit->kamar_mandi }}</td>
                            <td>{{ $unit->carport }}</td>
                            <td>{{ $unit->luas_tanah }} m²</td>
                            <td>{{ $unit->luas_bangunan }} m²</td>
                            <td>{{ $unit->spesifikasi }}</td>
                            {{-- <td>
                            <a href="{{ route('admin.units.edit', $unit->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('admin.units.destroy', $unit->id) }}"
                                method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus unit ini?')">Hapus</button>
                            </form>
                        </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Pagination --}}
            {{-- <div class="d-flex justify-content-center">
            {{ $units->links() }}
        </div> --}}

        </div>
    </div>
@endsection
