

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="card-title mb-4 text-center">Edit Barang</h2>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('barang.update', $barang->kd_barang)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input 
                        type="text" 
                        name="nama_barang" 
                        id="nama_barang" 
                        class="form-control" 
                        value="<?php echo e(old('nama_barang', $barang->nama_barang)); ?>"
                    >
                </div>

                <div class="mb-4">
                    <label for="harga_barang" class="form-label">Harga Barang</label>
                    <input 
                        type="text" 
                        name="harga_barang" 
                        id="harga_barang" 
                        class="form-control" 
                        value="<?php echo e(old('harga_barang', $barang->harga_barang)); ?>"
                    >
                </div>

                <button type="submit" class="btn btn-success w-100">Update</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/barang/edit.blade.php ENDPATH**/ ?>