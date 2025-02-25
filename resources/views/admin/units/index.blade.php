<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('images/icon/ICON.png') }}" type="image/x-icon">
        <title>Admin Graha Samawa</title>

        <!-- BOOTSTRAP CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- FONT AWESOME & GOOGLE FONTS CDN -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    </head>

    <body>
        <div class="wrapper">
            <aside id="sidebar" class="js-sidebar">
                <!-- SIDEBAR DISINI -->
                <div class="h-100">
                    <div class="sidebar-logo">
                        <span>Graha Samawa</span>
                        {{-- <span><img src="{{ asset ('images/icon/ICON.png') }} " alt="" width="50px" ></span> --}}
                    </div>
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            Menu
                        </li>
                        <li class="sidebar-item">
                            <a href="" class="sidebar-link" style="font-weight:500;font-size:18px;">
                                <i class="bi bi-house pe-2"></i>
                                Halaman Utama
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/unit" class="sidebar-link" style="font-weight:500;font-size:18px;">
                                <i class="bi bi-table pe-2"></i>
                                Data Unit
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a href="" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#dataunit" aria-expanded="false"
                                style="font-weight:500;font-size:18px;">
                                <i class="bi bi-table pe-2"></i>
                                Data
                            </a>
                            LINKING KE SUB-MENU DISINI YAAAA
                            <ul id="dataunit" class="sidebar-dropdown list-unstyled collapse"
                                data-bs-parrent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="/unit" class="sidebar-link"><i
                                            class="bi bi-building-fill pe-2"></i>Unit</a>
                                    {{-- <a href="#" class="sidebar-link"><i class="bi bi-journal pe-2"></i>Kontak</a> --}}
                                    {{-- <a href="#" class="sidebar-link"><i class="bi bi-chat-dots-fill pe-2"></i>Testimoni</a> --}}
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </aside>
            <div class="main">
                <!-- NAVBARNYA DISINI -->
                <nav class="navbar navbar-expand px-3 border-bottom">
                    <button class="btn" id="sidebar-toggle" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse navbar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                    <i class="bi bi-person-circle avatar"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right pe-1"></i>
                                        Keluar
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- KONTEN DISINI -->
                <main class="content px-3 py-2">
                    <div class="container-fluid">
                        <div class="my-3">
                            <h2>Selamat Datang, Admin</h2>
                        </div>
                        <hr>
                        <div class="row">
                            {{-- @foreach ($units as $unit)
                                <h3>{{ $unit->nama_unit }}</h3>
                                <p>{{ $unit->spesifikasi }}</p>

                                @foreach ($unit->images as $image)
                                    <img src="{{ asset('storage/' . $image->image_path) }}" width="150"> --}}

                            <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
                                <div class="card flex-fill">
                                    <div class="card-body card-unit">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                {{-- <h1>{{ $totalUnits }}</h1> --}}
                                                <p>Total Unit Properti</p>
                                            </div>
                                            <div class="col-6 text-end icon-unit">
                                                <i class="bi bi-building-fill" style="font-size: 56px;"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="dataunit.html">Lihat Detail <i
                                                class="bi bi-arrow-right-circle-fill ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
                                <div class="card flex-fill">
                                    <div class="card-body card-unit">
                                        <div class="row">
                                            <div class="col-6 text-start">
                                                {{-- <h1>{{ $totalVisitors }}</h1> --}}
                                                <p>Total Pengunjung</p>
                                            </div>
                                            <div class="col-6 text-end icon-unit">
                                                <i class="bi bi-people-fill" style="font-size: 56px;"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="dataunit.html">Lihat Detail <i
                                                class="bi bi-arrow-right-circle-fill ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- @endforeach
                            @endforeach --}}
                        </div>
                        <div class="card border-1">
                            <div class="card-header">
                                <h5 class="card-title">
                                    Riwayat Perubahan
                                </h5>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Unit</th>
                                            <th scope="col">Kamar Tidur</th>
                                            <th scope="col">Kamar Mandi</th>
                                            <th scope="col">Carport</th>
                                            <th scope="col">Luas Tanah</th>
                                            <th scope="col">Luas Bangunan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($units as $unit)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $unit->nama_unit }}</td>
                                                <td>{ $unit->kamar_tidur }}</td>
                                                <td>{{ $unit->kamar_mandi }}</td>
                                                <td>{{ $unit->carport }}</td>
                                                <td>{{ $unit->luas_tanah }} m²</td>
                                                <td>{{ $unit->luas_bangunan }} m²</td>
                                                <td>
                                                    <a href="{{ route('admin.units.edit', $unit->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.units.destroy', $unit->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Hapus unit ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>

                                {{-- Pagination --}}
                                {{-- <div class="d-flex justify-content-center">
                                    {{ $units->links() }}
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </main>
                <hr>
                <!-- FOOTER -->
                <div class="footer">
                    <div class="container-fluid text-start pb-3">
                        Copyright &copy; <strong>Tes Website</strong>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/script.js') }}"></script>

    </body>

</html>
