

<?php $__env->startSection('title', 'Listado de Productos'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Productos Disponibles</h2>

    <?php if($productos->isEmpty()): ?>
        <p>No hay productos registrados todavía.</p>
    <?php else: ?>
        <div class="grid">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <h3><?php echo e($p->nombre); ?></h3>
                    <p><?php echo e($p->descripcion); ?></p>
                    <p class="price"><?php echo e(number_format($p->precio, 2, ',', '.')); ?> €</p>
                    <a class="btn" href="<?php echo e(route('productos_arm.show', $p->id)); ?>">Ver detalles</a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_ARM\resources\views/productos_arm/index.blade.php ENDPATH**/ ?>