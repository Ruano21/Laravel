

<?php $__env->startSection('title', 'Detalle de Producto'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('productos_arm.index')); ?>">&larr; Volver al listado</a>

    <div style="margin-top: 20px;">
        <h2><?php echo e($producto->nombre); ?></h2>
        <p style="font-size: 1.1em; color: #555;"><?php echo e($producto->descripcion); ?></p>

        <p class="price">Precio: <?php echo e(number_format($producto->precio, 2, ',', '.')); ?> €</p>
        <p><strong>Stock disponible:</strong> <?php echo e($producto->stock); ?></p>

        <hr style="margin: 25px 0;">
        <p style="font-size: 0.9em; color: #888;">Este producto forma parte del catálogo AE_ARM.</p>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\CampusFP\AE_ARM\resources\views/productos_arm/show.blade.php ENDPATH**/ ?>