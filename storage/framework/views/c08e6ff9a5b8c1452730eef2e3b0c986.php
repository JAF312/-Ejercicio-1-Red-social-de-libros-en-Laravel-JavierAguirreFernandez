<h1>Perfil de usuarios</h1>

<ul>

    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li>
            <a href="usuarios/<?php echo e($usuario->id); ?>">
            <?php echo e($usuario->name); ?> (<?php echo e($usuario->email); ?>)
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button><a href="usuarios/<?php echo e($usuario->id); ?>/editar">Editar usuario</a></button>
         <form action="/usuarios/<?php echo e($usuario->id); ?>/eliminar" method="POST" style="display:inline">
             <?php echo csrf_field(); ?>
             <?php echo method_field("DELETE"); ?>
            <button type="submit">Eliminar</button>
          </form>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>  
<a href="/usuarios/crear"><button> Crear usuario</button></a>

<?php /**PATH /var/www/html/resources/views/usuarios.blade.php ENDPATH**/ ?>