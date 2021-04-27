
<div class="form-group">
    <label for="NoCtrl" class="control-label"><?php echo e('Número de Control: '); ?></label>
    <input class="form-control <?php echo e($errors->has('NoCtrl') ? 'is-invalid' : ''); ?> " type="number" name="NoCtrl" id="NoCtrl"
        min="9" value="<?php echo e(isset($alumno->NoCtrl) ? $alumno->NoCtrl : old('NoCtrl')); ?>">

    <?php echo $errors->first('NoCtrl', '<div class="invalid-feedback">:message</div>'); ?>



</div>

<div class="form-group">
    <label for="Nombre" class="control-label"><?php echo e('Nombre(s): '); ?></label>
    <input class="form-control <?php echo e($errors->has('Nombre') ? 'is-invalid' : ''); ?> " type="text" name="Nombre" id="Nombre"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="<?php echo e(isset($alumno->Nombre) ? $alumno->Nombre : old('Nombre')); ?>">
    <?php echo $errors->first('Nombre', '<div class="invalid-feedback">:message</div>'); ?>


</div>

<div class="form-group">
    <label for="Apaterno" class="control-label"><?php echo e('Apellido Paterno: '); ?></label>
    <input class="form-control <?php echo e($errors->has('Apaterno') ? 'is-invalid' : ''); ?> " type="text" name="Apaterno"
        id="Apaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="<?php echo e(isset($alumno->Apaterno) ? $alumno->Apaterno : old('Apaterno')); ?>">
    <?php echo $errors->first('Apaterno', '<div class="invalid-feedback">:message</div>'); ?>


</div>

<div class="form-group">
    <label for="Amaterno" class="control-label"><?php echo e('Apellido Materno: '); ?></label>
    <input class="form-control <?php echo e($errors->has('Amaterno') ? 'is-invalid' : ''); ?> " type="text" name="Amaterno"
        id="Amaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="<?php echo e(isset($alumno->Amaterno) ? $alumno->Amaterno : old('Amaterno')); ?>">
    <?php echo $errors->first('Amaterno', '<div class="invalid-feedback">:message</div>'); ?>


</div>

<div class="form-group">
    <label for="Carrera"
        class="control-label <?php echo e($errors->has('Carrera') ? 'is-invalid' : ''); ?> "><?php echo e('Carrera: '); ?></label>

    <select name="Carrera" class="form-control <?php echo e($errors->has('NoCtrl') ? 'is-invalid' : ''); ?> ">

        <OPTION VALUE="<?php echo e(isset($alumno->Carrera) ? $alumno->Carrera : ''); ?>">
            <?php echo e(isset($alumno->Carrera) ? $alumno->Carrera : old('Carrera')); ?></OPTION>
        <OPTION VALUE="ADMINISTRACION">ADMINISTRACI&Oacute;N</OPTION>
        <OPTION VALUE="CONTADOR">CONTADOR</OPTION>
        <OPTION VALUE="ELECTROMECANICA">ELECTROMEC&Aacute;NICA</OPTION>
        <OPTION VALUE="MECANICA">MEC&Aacute;NICA</OPTION>
        <OPTION VALUE="SISTEMAS">SISTEMAS</OPTION>
        <OPTION VALUE="ELECTRONICA">ELECTR&Oacute;NICA</OPTION>
        <OPTION VALUE="TICS">TICS</OPTION>
        <OPTION VALUE="IGE">IGE</OPTION>
        <OPTION VALUE="ELECTRICA">EL&Eacute;CTRICA</OPTION>
        <OPTION VALUE="INDUSTRIAL">INDUSTRIAL</OPTION>
        <OPTION VALUE="MECATRONICA">MECATR&Oacute;NICA</OPTION>

    </select>

    <?php echo $errors->first('Carrera', '<div class="invalid-feedback">:message</div>'); ?>



</div>

<p><strong>¿ES CORRECTA LA CARRERA?</strong></p>

<input type="submit" class="btn btn-primary" style="background-color: #1B396A;" value="<?php echo e($Modo == 'crear' ? 'Agregar' : 'Modificar'); ?>">
<a class="btn btn-danger" href="<?php echo e(url('alumnos')); ?>">Cancelar</a>
<?php /**PATH C:\wamp64\www\resi\residencias\resources\views/alumnos/form.blade.php ENDPATH**/ ?>