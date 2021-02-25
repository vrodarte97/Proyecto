

<?php $__env->startSection('content'); ?>

<div class="container">

Sección para editar alumnos<br><br>

<form action="<?php echo e(url('/alumnos/' .$alumno->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


    <?php echo $__env->make('alumnos.form',['Modo'=>'editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\resi\residencias\resources\views/alumnos/edit.blade.php ENDPATH**/ ?>