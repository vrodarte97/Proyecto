
<div class="form-group">
    <label for="NoCtrl" class="control-label">{{ 'Número de Control: ' }}</label>
    <input class="form-control {{ $errors->has('NoCtrl') ? 'is-invalid' : '' }} " type="number" name="NoCtrl" id="NoCtrl"
        min="9" value="{{ isset($alumno->NoCtrl) ? $alumno->NoCtrl : old('NoCtrl') }}">

    {!! $errors->first('NoCtrl', '<div class="invalid-feedback">:message</div>') !!}


</div>

<div class="form-group">
    <label for="Nombre" class="control-label">{{ 'Nombre(s): ' }}</label>
    <input class="form-control {{ $errors->has('Nombre') ? 'is-invalid' : '' }} " type="text" name="Nombre" id="Nombre"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($alumno->Nombre) ? $alumno->Nombre : old('Nombre') }}">
    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Apaterno" class="control-label">{{ 'Apellido Paterno: ' }}</label>
    <input class="form-control {{ $errors->has('Apaterno') ? 'is-invalid' : '' }} " type="text" name="Apaterno"
        id="Apaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($alumno->Apaterno) ? $alumno->Apaterno : old('Apaterno') }}">
    {!! $errors->first('Apaterno', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Amaterno" class="control-label">{{ 'Apellido Materno: ' }}</label>
    <input class="form-control {{ $errors->has('Amaterno') ? 'is-invalid' : '' }} " type="text" name="Amaterno"
        id="Amaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($alumno->Amaterno) ? $alumno->Amaterno : old('Amaterno') }}">
    {!! $errors->first('Amaterno', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Carrera"
        class="control-label {{ $errors->has('Carrera') ? 'is-invalid' : '' }} ">{{ 'Carrera: ' }}</label>

    <select name="Carrera" class="form-control {{ $errors->has('NoCtrl') ? 'is-invalid' : '' }} ">

        <OPTION VALUE="{{ isset($alumno->Carrera) ? $alumno->Carrera : '' }}">
            {{ isset($alumno->Carrera) ? $alumno->Carrera : old('Carrera') }}</OPTION>
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

    {!! $errors->first('Carrera', '<div class="invalid-feedback">:message</div>') !!}


</div>

<p><strong>¿ES CORRECTA LA CARRERA?</strong></p>

<input type="submit" class="btn btn-primary" style="background-color: #1B396A;" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}">
<a class="btn btn-danger" href="{{ url('alumnos') }}">Cancelar</a>
