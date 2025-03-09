@extends('layout.master')

@section('content')
    <div class="my-3">
        <h2>Upload / Update Brosur</h2>
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
                    <li>- Melakukan update brosur akan secara otomatis menimpa brosur yang sudah pernah di upload
                        sebelumnya.</li>
                    <li>- Brosur yang sudah tertimpa tidak bisa dikembalikan. Jika ingin mengembalikan brosur sebelumnya
                        maka harus upload ulang file brosur tersebut.</li>
                    <li>- File brosur harus berekstensi <strong>.pdf</strong>.</li>
                </ul>
            </div>
        </div>

        <form action="{{ route('admin.brochure.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="pdfFile" class="form-label">Upload Brosur (PDF)</label>
                <input type="file" name="pdf_file" id="pdfFile" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Update Brosur</button>
        </form>

        <br>
        <hr>
        <br>

        <div class="card border-1">
            <div class="card-header">
                <span style="font-size:26px; font-weight: 500;">Daftar Brosur yang Pernah Diupload</span>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>File Path</th>
                            <th>Jumlah Unduhan</th>
                            <th>Status</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brochure as $index => $b)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><a href="{{ asset('storage/' . $b->file_path) }}"
                                        target="_blank">{{ $b->file_path }}</a></td>
                                <td>{{ $b->download_count }}</td>
                                <td>
                                    @if ($b->is_active)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-secondary">Non-Active</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    <a href="{{ route('admin.brochure.download', ['id' => $b->id]) }}" class="btn btn-primary">
                                        <i class="fa fa-download"></i> Unduh
                                    </a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
