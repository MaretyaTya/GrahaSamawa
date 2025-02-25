<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME & GOOGLE FONTS CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="{{asset('css/dashboard.css') }}">

</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- SIDEBAR DISINI -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <span>Graha Samawa</span>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin" class="sidebar-link" style="font-weight:500;font-size:18px;">
                            <i class="bi bi-house pe-2"></i>
                            Halaman Utama
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dataunit" aria-expanded="false" style="font-weight:500;font-size:18px;">
                            <i class="bi bi-table pe-2"></i>
                            Data
                        </a>
                        <!-- LINKING KE SUB-MENU DISINI YAAAA -->
                        <ul id="dataunit" class="sidebar-dropdown list-unstyled collapse" data-bs-parrent="#sidebar">
                            <li class="sidebar-item">
                                <a href="/unit" class="sidebar-link"><i class="bi bi-building-fill pe-2"></i>Unit</a>
                                {{-- <a href="/kontak" class="sidebar-link"><i class="bi bi-journal pe-2"></i>Kontak</a> --}}
                                {{-- <a href="/testimoni" class="sidebar-link"><i class="bi bi-chat-dots-fill pe-2"></i>Testimoni</a> --}}
                            </li>
                        </ul>
                    </li>
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
                        <h2>Data Unit</h2>
                    </div>
                    <hr>
                    <div class="text-end mb-3">
                        <button href="#" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#modalDataUnit"><i class="bi bi-plus-lg"></i> Tambah Data</button>
                    </div>
                    
                    <div class="card border-1">
                        <div class="card-body">
                            <table id="data-unit" class="display text-center" style="width: 100%;">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Unit</th>
                                    <th scope="col">Kamar Tidur</th>
                                    <th scope="col">Kamar Mandi</th>
                                    <th scope="col">Carport</th>
                                    <th scope="col">Luas Tanah (m&sup2;)</th>
                                    <th scope="col">Luas Bangunan (m&sup2;)</th>
                                    <th scope="col">Spesifikasi</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td><img src="https://www.adira.co.id/img/frontend/news/thumb_rumahmewahminimalisjpg.jpg" alt="" style="width:300px;height:200px;"></td>
                                    <td>Tampak Depan</td>
                                    <td>Tipe A</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>60</td>
                                    <td>14</td>
                                    <td style="max-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium officiis perspiciatis natus, neque quis autem ea accusamus, at ratione provident repellendus asperiores harum incidunt modi iusto eaque, dolore sunt animi optio? Pariatur quod quaerat non doloremque sequi laborum maxime repellat inventore veritatis in reprehenderit dolor, culpa suscipit rerum voluptas molestiae dicta. Excepturi sit quam consectetur eius consequuntur saepe debitis fugiat, velit perspiciatis, explicabo, eveniet ad nulla quibusdam tenetur nobis vitae voluptatem nostrum reprehenderit blanditiis consequatur dolor exercitationem totam iste. Recusandae neque quam voluptas ullam, rem quod deserunt culpa dolores! Dolorum deserunt iste atque ea, distinctio repellendus labore expedita nulla exercitationem nostrum voluptatum qui officiis facere laudantium quod ab quaerat quia consectetur maxime maiores laboriosam fugit quae! Asperiores illum soluta nisi culpa perspiciatis doloribus? Sint corrupti aperiam ullam dolorem nisi. Iste veniam ducimus itaque in quasi esse ullam deleniti corporis, non voluptatem dolor corrupti nam repellat inventore. Distinctio, perferendis molestias!</td>
                                    <td colspan="2">
                                        <button class="btn btn-primary text-center" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#modalEditUnit"><i class="bi bi-pencil-square pe-1"></i></i>Edit</i></button>
                                        <a class="btn btn-danger text-center" style="width: 100px;"><i class="bi bi-trash pe-1"></i>Hapus</i></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </main>
            <hr>
            <!-- FOOTER DISINI -->
            <div class="footer">
                <div class="container-fluid text-start pb-3">
                    Copyright &copy; <strong>Test Website</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL TAMBAH DATA UNIT -->
    <div class="modal fade" id="modalDataUnit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataUnitModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="dataUnitModal">Tambah Data Unit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div>
                                    <label for="gambarUnit" class="form-label">Pilih gambar unit</label>
                                    <input id="gambarUnit" type="file" name="images[]" multiple accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputNamaUnit" class="form-control" placeholder="masukkan nama unit">
                                    <label for="inputNamaUnit" class="form-label">Nama Unit</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputKt" class="form-control" placeholder="masukkan kamar tidur">
                                    <label for="inputKt" class="form-label">Kamar Tidur (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputKm" class="form-control" placeholder="masukkan kamar mandi">
                                    <label for="inputKm" class="form-label">Kamar Mandi (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputCarport" class="form-control" placeholder="masukkan carport">
                                    <label for="inputCarport" class="form-label">Carport (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputLb" class="form-control" placeholder="masukkan lb">
                                    <label for="inputLb" class="form-label">Luas Bangunan (m&sup2;)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="inputLt" class="form-control" placeholder="masukkan lt">
                                    <label for="inputLt" class="form-label">Luas Tanah (m&sup2;)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <textarea name="" class="form-control" id="inputSpek" rows="3"></textarea>
                                    <label for="inputSpek" class="form-label">Spesifikasi Unit</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" style="width: 150px;">Submit</button>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm" style="width: 150px;">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT DATA UNIT -->
    <div class="modal fade" id="modalEditUnit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataUnitModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="dataUnitModal">Edit Data Unit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="editNamaUnit" class="form-control" placeholder="masukkan nama unit">
                                    <label for="editNamaUnit" class="form-label">Nama Unit</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="edittKt" class="form-control" placeholder="masukkan kamar tidur">
                                    <label for="editKt" class="form-label">Kamar Tidur (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="edittKm" class="form-control" placeholder="masukkan kamar mandi">
                                    <label for="editKm" class="form-label">Kamar Mandi (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="editCarport" class="form-control" placeholder="masukkan carport">
                                    <label for="editCarport" class="form-label">Carport (Jumlah)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="editLb" class="form-control" placeholder="masukkan lb">
                                    <label for="editLb" class="form-label">Luas Bangunan (m&sup2;)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="editLt" class="form-control" placeholder="masukkan lt">
                                    <label for="editLt" class="form-label">Luas Tanah (m&sup2;)</label>
                                </div>
                            </div>
                            <div class="col-md-12 mb-4">
                                <div class="form-floating">
                                    <textarea name="" class="form-control" id="editSpek" rows="3"></textarea>
                                    <label for="editpek" class="form-label">Spesifikasi Unit</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" style="width: 150px;">Submit</button>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm" style="width: 150px;">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL HAPUS -->
    <div class="modal fade" id="hapusUnit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <span>Apakah anda yakin ingin menghapus data ini?</span>
                    <br>
                    <small class="text-muted"><i class="fa-solid fa-circle-info"></i> Data akan terhapus permanen.</small>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-sm" style="width: 150px;">Yakin</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary btn-sm" style="width: 150px;">Batal</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>