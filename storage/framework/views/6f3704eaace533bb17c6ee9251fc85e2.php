

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Form Tambah Penjualan</h2>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('penjualan.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="faktur" class="form-label">No Faktur</label>
                    <input 
                        type="number" 
                        name="faktur" 
                        id="faktur" 
                        class="form-control" 
                        value="<?php echo e(old('faktur')); ?>"
                    >
                </div>

                <div class="mb-3">
                    <label for="no_pelanggan" class="form-label">Nama Pelanggan</label>
                    <select name="no_pelanggan" id="no_pelanggan" class="form-select">
                        <option value="">-- Pilih Pelanggan --</option>
                        <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($p->no_pelanggan); ?>" <?php echo e(old('no_pelanggan') == $p->no_pelanggan ? 'selected' : ''); ?>>
                                <?php echo e($p->nama_pelanggan); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tanggal_penjualan" class="form-label">Tanggal Penjualan</label>
                    <input 
                        type="date" 
                        name="tanggal_penjualan" 
                        id="tanggal_penjualan" 
                        class="form-control" 
                        value="<?php echo e(old('tanggal_penjualan')); ?>"
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>

            <div class="mt-3 text-center">
                <a href="<?php echo e(route('penjualan.index')); ?>" class="text-decoration-none">← Kembali ke daftar penjualan</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/penjualan/create.blade.php ENDPATH**/ ?>