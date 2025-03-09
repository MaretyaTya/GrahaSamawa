<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo e(asset('images/icon/ICON.png')); ?>" type="image/x-icon">
        <title>Admin Graha Samawa</title>

        <!-- BOOTSTRAP CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- FONT AWESOME & GOOGLE FONTS CDN -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                        <li class="sidebar-item beranda">
                            <a href="/admin/dashboard" class="sidebar-link" style="font-weight:500;font-size:18px;">
                                <i class="bi bi-house pe-2"></i>
                                Halaman Utama
                            </a>
                        </li>
                        <li class="sidebar-header">
                            Menu
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin/units" class="sidebar-link" style="font-weight:500;font-size:18px;">
                                <i class="bi bi-table pe-2"></i>
                                Data Unit
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/admin/brochure" class="sidebar-link" style="font-weight:500;font-size:18px;">
                                <i class="fa-solid fa-file-pdf pe-2"></i>
                                Brosur
                            </a>
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
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right pe-1"></i> Keluar
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- KONTEN DISINI -->
                <main class="content px-3 py-2">
                    <div class="container-fluid">
                        <?php echo $__env->yieldContent('content'); ?>
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
        <script src="<?php echo e(asset('js/script.js')); ?>"></script>

        <!-- Preview Gambar -->
        <script>
            function previewImages() {
                let previewContainer = document.getElementById('imagePreview');
                previewContainer.innerHTML = ''; // Kosongkan preview sebelum menambahkan yang baru

                let files = document.getElementById('gambarUnit').files;

                if (files.length > 10) {
                    alert("Maksimal 10 gambar yang dapat diunggah!");
                    document.getElementById('gambarUnit').value = "";
                    return;
                }

                for (let i = 0; i < files.length; i++) {
                    let file = files[i];
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'img-thumbnail m-1';
                        img.style.width = '100px';
                        img.style.height = '100px';
                        previewContainer.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <script>
            // Update modal fields when edit button is clicked
            $('#modalEdit').on('show.bs.modal', function(event) {

                var button = $(event.relatedTarget); // Button that triggered the modal
                var unit = button.data('unit');

                // // Update the modal's form action
                var modal = $(this);
                modal.find('form').attr('action', '/admin/units/' + unit.id);
                modal.find('.modal-body #unit_id').val(unit.id);
                modal.find('.modal-body #nama_unit').val(unit.nama_unit);
                modal.find('.modal-body #harga').val(unit.harga);
                modal.find('.modal-body #kamar_tidur').val(unit.kamar_tidur);
                modal.find('.modal-body #kamar_mandi').val(unit.kamar_mandi);
                modal.find('.modal-body #carport').val(unit.carport);
                modal.find('.modal-body #luas_tanah').val(unit.luas_tanah);
                modal.find('.modal-body #luas_bangunan').val(unit.luas_bangunan);
                modal.find('.modal-body #spesifikasi').val(unit.spesifikasi);
            });
        </script>


    </body>

</html>
<?php /**PATH C:\Users\maret\OneDrive\Documents\WEBSITE PROJECT\Real Estate\Website\GrahaSamawa\resources\views/layout/master.blade.php ENDPATH**/ ?>