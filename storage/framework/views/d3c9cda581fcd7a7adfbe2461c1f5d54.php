<?php $__env->startSection('content'); ?>
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
                            <h1><?php echo e($totalUnits); ?></h1>
                            <p>Total Unit Properti</p>
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-building-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
            <div class="card flex-fill">
                <div class="card-body card-unit">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h1><?php echo e($totalVisitors); ?></h1>
                            <p>Total Pengunjung</p>
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-people-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 d-flex mb-4">
            <div class="card flex-fill">
                <div class="card-body card-unit">
                    <div class="row">
                        <div class="col-6 text-start">
                            <?php if($brochure): ?>
                                <h1><?php echo e($brochure->download_count); ?></h1>
                                <p>Total Unduh Brosur</p>
                            <?php else: ?>
                                <h1>0</h1>
                                <p>Total Unduh Brosur</p>
                            <?php endif; ?>
                        </div>
                        <div class="col-6 text-end icon-unit">
                            <i class="bi bi-file-earmark-arrow-down-fill" style="font-size: 56px;"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
    <div class="card border-1">

        <div class="card-header title-card d-flex">
            <div class="me-2">
                <span>Data Unit Properti Keseluruhan</span>
            </div>
            <div>
                <a href="/admin/units" class="btn btn-info btn-sm text-bg-info">Lihat selengkapnya</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-dashboard">
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
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($unit->nama_unit); ?></td>
                            <td>Rp <?php echo e(number_format($unit->harga, 0, ',', '.')); ?></td>
                            <td><?php echo e($unit->kamar_tidur); ?></td>
                            <td><?php echo e($unit->kamar_mandi); ?></td>
                            <td><?php echo e($unit->carport); ?></td>
                            <td><?php echo e($unit->luas_tanah); ?> m²</td>
                            <td><?php echo e($unit->luas_bangunan); ?> m²</td>
                            <td><?php echo e($unit->spesifikasi); ?></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            
            
        </div>
    </div>

    <br>

    
    <div class="card title-card d-flex">
        <div class="card-header">
            <h4>Data Pengunjung Per Bulan</h4>
        </div>
        <div class="card-body">
            <table class="table table-striped table-dashboard">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Total Pengunjung</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $visitorData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $visitor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($index + 1); ?></th>
                            <td><?php echo e(DateTime::createFromFormat('!m', $visitor->month)->format('F')); ?></td>
                            <td><?php echo e($visitor->year); ?></td>
                            <td><?php echo e($visitor->total); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\maret\OneDrive\Documents\WEBSITE PROJECT\Real Estate\Website\GrahaSamawa\resources\views/admin/units/index.blade.php ENDPATH**/ ?>