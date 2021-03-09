

<?php $__env->startSection('content'); ?>

<div class="container">

<?php if(Session::has('Mensaje')): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(Session::get('Mensaje')); ?>

</div>

<?php endif; ?>
<br>

<a href="<?php echo e(url('alumnos/create')); ?>" class="btn btn-outline-primary">Agregar Alumno</a>
<a href="<?php echo e(url('students')); ?>" class="btn btn-outline-primary">Buscar/Guardar</a>




<br><br>

<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>N&uacute;mero de control</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Carrera</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $alumnos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alumno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($alumno->NoCtrl); ?></td>
            <td><?php echo e($alumno->Nombre); ?></td>
            <td><?php echo e($alumno->Apaterno); ?></td>
            <td><?php echo e($alumno->Amaterno); ?></td>
            <td><?php echo e($alumno->Carrera); ?></td>
            <td>

            <a class="btn btn-outline-success" href="<?php echo e(url('/alumnos/'.$alumno->id.'/edit')); ?>">
            Editar
            </a>
                
                <form method="post" action="<?php echo e(url('/alumnos/'.$alumno->id)); ?>" style="display:inline">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('DELETE')); ?>

                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Estas seguro que deseas eliminar este dato? Una vez eliminado no podras recuperarlo.')">Borrar </button>
                </form> 
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>



</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\resi\residencias\resources\views/alumnos/index.blade.php ENDPATH**/ ?>