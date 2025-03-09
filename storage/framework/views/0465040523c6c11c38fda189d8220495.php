<?php $__env->startSection('content'); ?>
    <div class="my-3">
        <h2>Data Unit</h2>
    </div>
    <hr>
    <div class="text-end mb-3">
        <button href="#" class="btn btn-success  text-white" data-bs-toggle="modal" data-bs-target="#modalDataUnit"><i
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
                    <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($loop->iteration); ?></th>
                            <td>
                                <?php if($unit->images->isNotEmpty()): ?>
                                    <img src="<?php echo e(asset('storage/' . $unit->images->first()->image_path)); ?>"
                                        alt="<?php echo e($unit->nama_unit); ?>" style="width:100px;height:100px; object-fit: cover;">
                                    
                                <?php else: ?>
                                    <p class="text-muted">Tidak ada gambar</p>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($unit->nama_unit); ?></td>
                            <td>Rp <?php echo e(number_format($unit->harga, 0, ',', '.')); ?></td>
                            <td><?php echo e($unit->kamar_tidur); ?></td>
                            <td><?php echo e($unit->kamar_mandi); ?></td>
                            <td><?php echo e($unit->carport); ?></td>
                            <td><?php echo e($unit->luas_tanah); ?> m²</td>
                            <td><?php echo e($unit->luas_bangunan); ?> m²</td>
                            <td style="max-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
                                <?php echo e($unit->spesifikasi); ?>

                            </td>
                            <td colspan="2">
                                <div class="d-flex justify-content-center">
                                    <!-- Tombol Edit -->
                                    <button class="btn btn-primary text-center btn-edit-unit me-1" data-bs-toggle="modal"
                                        data-bs-target="#modalEdit" data-unit="<?php echo e($unit); ?>">
                                        <i class="bi bi-pencil-square"></i><span> Edit</span>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <form action="<?php echo e(route('admin.units.destroy', $unit->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger text-center"
                                            onclick="return confirm('Yakin ingin menghapus unit ini?')">
                                            <i class="bi bi-trash"></i><span> Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('modals.unit-edit-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo $__env->make('modals.unit-add-modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\maret\OneDrive\Documents\WEBSITE PROJECT\Real Estate\Website\GrahaSamawa\resources\views/admin/units/unit.blade.php ENDPATH**/ ?>