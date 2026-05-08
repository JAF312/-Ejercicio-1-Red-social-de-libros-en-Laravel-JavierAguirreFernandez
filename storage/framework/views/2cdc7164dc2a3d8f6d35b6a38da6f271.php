<h1>Creación de usuario</h1>
<form action="/usuarios" method="POST">
    <?php echo csrf_field(); ?>
<p>Nombre : <input type="text" name="name"></p>
<?php $__currentLoopData = $errors->get("name"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div><?php echo e($error); ?> </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<p>Contraseña : <input type="text" name="password"></p>
<?php $__currentLoopData = $errors->get("email"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div><?php echo e($error); ?> </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<input type="submit" value="Enviar">
<?php $__currentLoopData = $errors->get("password"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div><?php echo e($error); ?> </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</form>
<!--
<?php if($errors->any()): ?>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
<?php endif; ?>

<a href="/usuarios"><button> Volver</button></a>
--><?php /**PATH /var/www/html/resources/views/usuario_crear.blade.php ENDPATH**/ ?>