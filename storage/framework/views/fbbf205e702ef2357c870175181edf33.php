

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Pelanggan</h2>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('pelanggan.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="no_pelanggan" class="form-label">No Pelanggan</label>
                    <input 
                        type="number" 
                        name="no_pelanggan" 
                        id="no_pelanggan" 
                        class="form-control" 
                        value="<?php echo e(old('no_pelanggan')); ?>"
                    >
                </div>

                <div class="mb-3">
                    <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                    <input 
                        type="text" 
                        name="nama_pelanggan" 
                        id="nama_pelanggan" 
                        class="form-control" 
                        value="<?php echo e(old('nama_pelanggan')); ?>"
                    >
                </div>

                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input 
                        type="text" 
                        name="alamat" 
                        id="alamat" 
                        class="form-control" 
                        value="<?php echo e(old('alamat')); ?>"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="<?php echo e(route('pelanggan.index')); ?>" class="text-decoration-none">← Kembali ke daftar pelanggan</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>