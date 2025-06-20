

<?php $__env->startSection('content'); ?>
    <h2>Daftar Penjualan</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('penjualan.create')); ?>" class="btn btn-primary mb-3">Tambah Penjualan</a>
    <a href="<?php echo e(route('penjualan.pdf')); ?>" class="btn btn-danger mb-3" target="_blank">
        Cetak PDF
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Faktur</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($penjualan->faktur); ?></td>
                    <td><?php echo e($penjualan->pelanggan->nama_pelanggan ?? '-'); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($penjualan->tanggal_penjualan)->translatedFormat('d F Y')); ?></td>
                    <td>
                        <div class="btn-group gap-2" role="group">
                            <a href="<?php echo e(route('penjualan.edit', $penjualan->faktur)); ?>" class="btn btn-warning btn-sm">Edit</a>
                        <form action="<?php echo e(route('penjualan.destroy', $penjualan->faktur)); ?>" method="POST">
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\RAFLI-20031908\Desktop\penjualan_barang\resources\views/penjualan/index.blade.php ENDPATH**/ ?>