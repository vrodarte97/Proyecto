<p><Strong>INSTRUCCIONES: <br></Strong>
    <br>
    <u style="color:green">Por favor, rellena los campos que se muestran a continuación SIN ACENTOS.</u>
</p>


<div class="form-group">
    <label for="Nombre" class="control-label">{{ 'Nombre(s): ' }}</label>
    <input class="form-control {{ $errors->has('Nombre') ? 'is-invalid' : '' }} " type="text" name="Nombre" id="Nombre"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($aspirante->Nombre) ? $aspirante->Nombre : old('Nombre') }}">
    {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Apaterno" class="control-label">{{ 'Apellido Paterno: ' }}</label>
    <input class="form-control {{ $errors->has('Apaterno') ? 'is-invalid' : '' }} " type="text" name="Apaterno"
        id="Apaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($aspirante->Apaterno) ? $aspirante->Apaterno : old('Apaterno') }}">
    {!! $errors->first('Apaterno', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Amaterno" class="control-label">{{ 'Apellido Materno: ' }}</label>
    <input class="form-control {{ $errors->has('Amaterno') ? 'is-invalid' : '' }} " type="text" name="Amaterno"
        id="Amaterno"
        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($aspirante->Amaterno) ? $aspirante->Amaterno : old('Amaterno') }}">
    {!! $errors->first('Amaterno', '<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
    <label for="Correo" class="control-label">{{ 'Correo: ' }}</label>
    <input class="form-control {{ $errors->has('Correo') ? 'is-invalid' : '' }} " type="email" name="Correo" id="Correo"
        value="{{ isset($aspirante->Correo) ? $aspirante->Correo : old('Correo') }}">
    {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}

</div>



<div class="form-group">
    <label for="Escuela" class="control-label {{$errors->has('Escuela')?'is-invalid':'' }} ">{{'Escuela De Procedencia: '}}</label>

    <select name="Escuela" class="form-control {{$errors->has('Escuela')?'is-invalid':'' }} ">
                    
        <OPTION VALUE="{{ isset($aspirante->Escuela)?$aspirante->Escuela:''}}">{{ isset($aspirante->Escuela)?$aspirante->Escuela:old('Escuela')}}</OPTION>
        <option value="PREPARATORIA CENTRAL DE CD. JUAREZ">PREPARATORIA CENTRAL DE CD. JUAREZ</option>
        <option value="CBTIS 128">CBTIS 128</option>
        <option value="CBTIS 114">CBTIS 114</option>
        <option value="INSTITUTO IBEROAMERICANO SAN PATRICIO">INSTITUTO IBEROAMERICANO SAN PATRICIO</option>
        <option value="INSTITUTO MEXICO">INSTITUTO MEXICO</option>
        <option value="CETIS 61">CETIS 61</option>
        <option value="COBACH 6">COBACH 6</option>
        <option value="CENTRO DE ESTUDIOS TECNOLOGICOS DE CD JUAREZ CAMPUS HENEQUEN">CENTRO DE ESTUDIOS TECNOLOGICOS DE CD JUAREZ CAMPUS HENEQUEN</option>
        <option value="COBACH 19">COBACH 19</option>
        <option value="CBTIS 270">CBTIS 270</option>
        <option value="COBACH 5">COBACH 5</option>
        <option value="COBACH 7">COBACH 7</option>
        <option value="COBACH 11">COBACH 11</option>
        <option value="COLEGIO TERESIANO">COLEGIO TERESIANO</option>
        <option value="COBACH 9">COBACH 9</option>
        <option value="PREPARATORIA MEXICO LIBRE">PREPARATORIA MEXICO LIBRE</option>
        <option value="PREPARATORIA CULTURAL">PREPARATORIA CULTURAL</option>
        <option value="PREPARATORIA INSTITUTO PASO DEL NORTE">OREOARATORIA INSTITUTO PASO DEL NORTE</option>
        <option value="PREPARATORIA AZTLAN">PREPARATORIA AZTLAN</option>
        <option value="INSTITUTO POLITECNICO DE LA FRONTERA">INSTITUTO POLITECNICO DE LA FRONTERA</option>
        <option value="INSTITUTO ROSARIO CASTELLANOS">INSTITUTO ROSARIO CASTELLANOS</option>
        <option value="OTRO">OTRO</option>
    
    </select>

    {!! $errors->first('Escuela','<div class="invalid-feedback">:message</div>' ) !!}


    </div>

    <p><strong>¿ES CORRECTA LA ESCUELA DE PROCEDENCIA?</strong></p>




<div class="form-group">
    <label for="Carrera"
        class="control-label {{ $errors->has('Carrera') ? 'is-invalid' : '' }} ">{{ 'Carrera deseada: ' }}</label>

    <select name="Carrera" class="form-control {{ $errors->has('Carrera') ? 'is-invalid' : '' }} ">

        <OPTION VALUE="{{ isset($aspirante->Carrera) ? $aspirante->Carrera : '' }}">
            {{ isset($aspirante->Carrera) ? $aspirante->Carrera : old('Carrera') }}</OPTION>
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

<input type="submit" class="btn btn-primary" value="{{ $Modo == 'crear' ? 'Agregar' : 'Modificar' }}">
<a class="btn btn-danger" href="{{ url('aspirantes') }}">Cancelar</a>
