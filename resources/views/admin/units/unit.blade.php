@extends('layout.master')

@section('content')
    <div class="my-3">
        <h2>Data Unit</h2>
    </div>
    <hr>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="alert alert-warning" role="alert">
        <strong><em>Catatan :</em></strong>
        <div class="catatan mt-2">
            <ul>
                <li>- Upload untuk gambar unit harus beberapa gambar sekaligus <strong>(maks. 10 gambar)</strong>.</li>
                <li>- Tidak bisa melakukan penghapusan pada salah satu gambar, melakukan unggah gambar dari awal.</li>
                <li>- Data yang sudah dihapus tidak bisa direstore atau dikembalikan.</li>
                <li>- Data grafik masih belum tersedia untuk dijadikan file.</li>
            </ul>
        </div>
    </div>

    <div class="text-start mb-3">
        <button href="#" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#modalDataUnit"><i
                class="bi bi-plus-lg"></i> Tambah Data</button>
    </div>

    <div class="card border-1">
        <div class="card-body">
            <table id="data-unit" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama Unit</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kamar Tidur</th>
                        <th scope="col">Kamar Mandi</th>
                        <th scope="col">Carport</th>
                        <th scope="col">Luas Tanah (m&sup2;)</th>
                        <th scope="col">Luas Bangunan (m&sup2;)</th>
                        <th scope="col">Spesifikasi</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($units as $unit)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>
                                @if ($unit->images->isNotEmpty())
                                    <img src="{{ asset('storage/' . $unit->images->first()->image_path) }}"
                                        alt="{{ $unit->nama_unit }}"
                                        style="width:100px;height:100px; object-fit: cover; cursor: pointer;"
                                        data-bs-toggle="modal" data-bs-target="#imageModal-{{ $unit->id }}">

                                    <!-- Modal untuk menampilkan semua gambar -->
                                    <div class="modal fade" id="imageModal-{{ $unit->id }}" tabindex="-1"
                                        aria-labelledby="imageModalLabel-{{ $unit->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="imageModalLabel-{{ $unit->id }}">Gambar
                                                        Unit: {{ $unit->nama_unit }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="carousel-{{ $unit->id }}" class="carousel slide"
                                                        data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            @foreach ($unit->images as $key => $image)
                                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                    <img src="{{ asset('storage/' . $image->image_path) }}"
                                                                        class="d-block w-100"
                                                                        style="border-radius: 10px; max-height: 500px; object-fit: cover;"
                                                                        alt="{{ $unit->nama_unit }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <button class="carousel-control-prev" type="button"
                                                            data-bs-target="#carousel-{{ $unit->id }}"
                                                            data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button"
                                                            data-bs-target="#carousel-{{ $unit->id }}"
                                                            data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <p class="text-muted">Tidak ada gambar</p>
                                @endif
                            </td>

                            <td>{{ $unit->nama_unit }}</td>
                            <td>Rp {{ number_format($unit->harga, 0, ',', '.') }}</td>
                            <td>{{ $unit->kamar_tidur }}</td>
                            <td>{{ $unit->kamar_mandi }}</td>
                            <td>{{ $unit->carport }}</td>
                            <td>{{ $unit->luas_tanah }} m²</td>
                            <td>{{ $unit->luas_bangunan }} m²</td>
                            <td style="max-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                {{ $unit->spesifikasi }}
                            </td>
                            <td colspan="2">
                                <div class="d-flex justify-content-center">
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-primary text-center btn-edit-unit me-1" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit" data-unit="{{ $unit }}">
                                        <i class="bi bi-pencil-square"></i><span> Edit</span>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-center"
                                            onclick="return confirm('Yakin ingin menghapus unit ini?')">
                                            <i class="bi bi-trash"></i><span> Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @include('modals.unit-add-modal')
                    @include('modals.unit-edit-modal')

                </tbody>
            </table>
        </div>
    </div>


    <!-- MODAL HAPUS -->
    <div class="modal fade" id="hapusUnit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <span>Apakah anda yakin ingin menghapus data ini?</span>
                    <br>
                    <small class="text-muted"><i class="fa-solid fa-circle-info"></i> Data akan terhapus
                        permanen.</small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-sm" style="width: 150px;">Yakin</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm"
                        style="width: 150px;">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endsection
