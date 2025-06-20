

<?php $__env->startSection('content'); ?>
    <h2>Daftar Pelanggan</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('pelanggan.create')); ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <form method="GET" action="<?php echo e(route('pelanggan.index')); ?>" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari pelanggan..." value="<?php echo e(request('search')); ?>">
            <button class="btn btn-secondary">Cari</button>
        </div>
    </form>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pelanggan->no_pelanggan); ?></td>
                    <td><?php echo e($pelanggan->nama_pelanggan); ?></td>
                    <td><?php echo e($pelanggan->alamat); ?></td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                        <a href="<?php echo e(route('pelanggan.edit', $pelanggan->no_pelanggan)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('pelanggan.destroy', $pelanggan->no_pelanggan)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>