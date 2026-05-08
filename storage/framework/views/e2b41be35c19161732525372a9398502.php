<h1>Valoraciones de "<?php echo e($libro->titulo); ?>"</h1>

<?php if($valoraciones->isEmpty()): ?>
    <p>Aún no hay valoraciones para este libro.</p>
<?php else: ?>
    <ul>
        <?php $__currentLoopData = $valoraciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valoracion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="/libros/<?php echo e($libro->id); ?>/valoraciones/<?php echo e($valoracion->id); ?>">
                    ⭐ <?php echo e($valoracion->puntuacion); ?>/5
                    por <strong><?php echo e($valoracion->user->name); ?></strong>
                </a>
                — <?php echo e(Str::limit($valoracion->comentario, 80)); ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>

<a href="/libros/<?php echo e($libro->id); ?>/valoraciones/crear">
    <button>Añadir mi valoración</button>
</a>
&nbsp;
<a href="/libros/<?php echo e($libro->id); ?>"><button>Volver al libro</button></a><?php /**PATH /var/www/html/resources/views/libros/valoraciones.blade.php ENDPATH**/ ?>