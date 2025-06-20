

<?php $__env->startSection('content'); ?>
    <h2 class="mb-3">Daftar Barang</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-primary mb-3">Tambah Barang</a>
    <a href="<?php echo e(route('barang.pdf')); ?>" class="btn btn-outline-secondary mb-3" target="_blank">Cetak PDF</a>

    <form method="GET" action="<?php echo e(route('barang.index')); ?>" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari barang..." value="<?php echo e(request('search')); ?>">
            <button class="btn btn-secondary">Cari</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($barang->kd_barang); ?></td>
                    <td><?php echo e($barang->nama_barang); ?></td>
                    <td>Rp <?php echo e(number_format($barang->harga_barang, 0, ',', '.')); ?></td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                            <a href="<?php echo e(route('barang.edit', $barang->kd_barang)); ?>" class="btn btn-warning btn-sm">Edit</a>

                            <form action="<?php echo e(route('barang.destroy', $barang->kd_barang)); ?>" method="POST" onsubmit="return confirm('Yakin hapus?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </div>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/barang/index.blade.php ENDPATH**/ ?>