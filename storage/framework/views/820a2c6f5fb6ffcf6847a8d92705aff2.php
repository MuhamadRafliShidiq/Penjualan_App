

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Barang</h2>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('barang.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="kd_barang" class="form-label">Kode Barang</label>
                    <input 
                        type="number" 
                        class="form-control" 
                        id="kd_barang" 
                        name="kd_barang" 
                        value="<?php echo e(old('kd_barang')); ?>"
                    >
                </div>

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nama_barang" 
                        name="nama_barang" 
                        value="<?php echo e(old('nama_barang')); ?>"
                    >
                </div>

                <div class="mb-4">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="harga_barang" 
                        name="harga_barang" 
                        value="<?php echo e(old('harga_barang')); ?>"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="<?php echo e(route('barang.index')); ?>" class="text-decoration-none">← Kembali ke daftar barang</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/barang/create.blade.php ENDPATH**/ ?>