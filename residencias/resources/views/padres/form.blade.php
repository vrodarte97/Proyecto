
<p><Strong>INSTRUCCIONES: <br></Strong>
    <br>
    <u style="color:green">Por favor, rellena los campos que se muestran a continuación SIN ACENTOS.</u>
    </p>
    

    <div class="form-group">
        <label for="NombrePadre" class="control-label">{{'Nombre(s) Del Padre: '}}</label>
        <input class="form-control {{$errors->has('NombrePadre')?'is-invalid':'' }} " type="text" name="NombrePadre" id="NombrePadre"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($padre->NombrePadre)?$padre->NombrePadre:old('NombrePadre')}}"
        > 
        {!! $errors->first('NombrePadre','<div class="invalid-feedback">:message</div>' ) !!}
    
        </div>
        
        <div class="form-group">
        <label for="ApaternoPadre" class="control-label">{{'Apellido Paterno Del Padre: '}}</label>
        <input class="form-control {{$errors->has('ApaternoPadre')?'is-invalid':'' }} " type="text" name="ApaternoPadre" id="ApaternoPadre"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
        value="{{ isset($padre->ApaternoPadre)?$padre->ApaternoPadre:old('ApaternoPadre')}}"
        > 
        {!! $errors->first('ApaternoPadre','<div class="invalid-feedback">:message</div>' ) !!}
    
        </div>
        
        <div class="form-group">
        <label for="AmaternoPadre" class="control-label">{{'Apellido Materno Del Padre: '}}</label>
        <input class="form-control {{$errors->has('AmaternoPadre')?'is-invalid':'' }} " type="text" name="AmaternoPadre" id="AmaternoPadrePadre"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" 
        value="{{ isset($padre->AmaternoPadre)?$padre->AmaternoPadre:old('AmaternoPadre')}}"
        > 
        {!! $errors->first('AmaternoPadre','<div class="invalid-feedback">:message</div>' ) !!}
    
        </div>

    <div class="form-group">
    <label for="NoCtrl" class="control-label">{{'Número de Control: '}}</label>
    <input class="form-control {{$errors->has('NoCtrl')?'is-invalid':'' }} " type="number" name="NoCtrl" id="NoCtrl" min="9"
    value="{{ isset($padre->NoCtrl)?$padre->NoCtrl:old('NoCtrl')}}"
    > 

        {!! $errors->first('NoCtrl','<div class="invalid-feedback">:message</div>' ) !!}
        

    </div>
    
    <div class="form-group">
    <label for="NombreAlumno" class="control-label">{{'Nombre(s) Del Alumno: '}}</label>
    <input class="form-control {{$errors->has('NombreAlumno')?'is-invalid':'' }} " type="text" name="NombreAlumno" id="NombreAlumno"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
    value="{{ isset($padre->NombreAlumno)?$padre->NombreAlumno:old('NombreAlumno')}}"
    > 
    {!! $errors->first('NombreAlumno','<div class="invalid-feedback">:message</div>' ) !!}

    </div>
    
    <div class="form-group">
    <label for="ApaternoAlumno" class="control-label">{{'Apellido Paterno Del Alumno: '}}</label>
    <input class="form-control {{$errors->has('ApaternoAlumno')?'is-invalid':'' }} " type="text" name="ApaternoAlumno" id="ApaternoAlumno"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
    value="{{ isset($padre->ApaternoAlumno)?$padre->ApaternoAlumno:old('ApaternoAlumno')}}"
    > 
    {!! $errors->first('ApaternoAlumno','<div class="invalid-feedback">:message</div>' ) !!}

    </div>
    
    <div class="form-group">
    <label for="AmaternoAlumno" class="control-label">{{'Apellido Materno Del Alumno: '}}</label>
    <input class="form-control {{$errors->has('AmaternoAlumno')?'is-invalid':'' }} " type="text" name="AmaternoAlumno" id="AmaternoAlumno"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" 
    value="{{ isset($padre->AmaternoAlumno)?$padre->AmaternoAlumno:old('AmaternoAlumno')}}"
    > 
    {!! $errors->first('AmaternoAlumno','<div class="invalid-feedback">:message</div>' ) !!}

    </div>
    
    <div class="form-group">
    <label for="Carrera" class="control-label {{$errors->has('Carrera')?'is-invalid':'' }} ">{{'Carrera: '}}</label>

    <select name="Carrera" class="form-control {{$errors->has('NoCtrl')?'is-invalid':'' }} ">
                    
        <OPTION VALUE="{{ isset($padre->Carrera)?$padre->Carrera:''}}">{{ isset($padre->Carrera)?$padre->Carrera:old('Carrera')}}</OPTION>
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

    {!! $errors->first('Carrera','<div class="invalid-feedback">:message</div>' ) !!}


    </div>

    <p><strong>¿ES CORRECTA LA CARRERA?</strong></p>

    <input type="submit" class="btn btn-primary" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a class="btn btn-danger" href="{{url('padres')}}">Cancelar</a>