

<?php $__env->startSection('content'); ?>
    <div class="my-3">
        <h2>Upload / Update Brosur</h2>
        <hr>

        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <form action="<?php echo e(route('admin.brochure.update')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="pdfFile" class="form-label">Upload Brosur (PDF)</label>
                <input type="file" name="pdf_file" id="pdfFile" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Brosur</button>
        </form>

        <br>
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
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $brochure; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($index + 1); ?></td>
                                <td><a href="<?php echo e(asset('storage/' . $b->file_path)); ?>" target="_blank"><?php echo e($b->file_path); ?></a></td>
                                <td><?php echo e($b->download_count); ?></td>
                                <td>
                                    <?php if($b->is_active): ?>
                                        <span class="badge bg-success">Active</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Non-Active</span>
                                    <?php endif; ?>
                                </td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\maret\Downloads\Graha Samawa\resources\views/admin/units/brochure.blade.php ENDPATH**/ ?>