<div class="box box-info padding-1">
    <div class="box-body">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="row g-3">
        <div class="col-3 ">
            <b> <h3>Datos Personales</h3></b>
            {{ Form::label('Número de Cédula') }}
            {{ Form::text('cedula', $hoja->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => '0600000000']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="row g-3">
            <div class="col-3 ">
                {{ Form::label('Primer Nombre',) }}
                {{ Form::text('nombreuno', $hoja->nombreuno, ['class' => 'form-control' . ($errors->has('nombreuno') ? ' is-invalid' : ''), 'placeholder' => 'Jefferson']) }}
                {!! $errors->first('nombreuno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('Segundo Nombre') }}
                {{ Form::text('nombredos', $hoja->nombredos, ['class' => 'form-control' . ($errors->has('nombredos') ? ' is-invalid' : ''), 'placeholder' => 'Enrique']) }}
                {!! $errors->first('nombredos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('Apellido Paterno') }}
                {{ Form::text('apellidouno', $hoja->apellidouno, ['class' => 'form-control' . ($errors->has('apellidouno') ? ' is-invalid' : ''), 'placeholder' => 'Cuello']) }}
                {!! $errors->first('apellidouno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('Apellido Materno') }}
                {{ Form::text('apellidos', $hoja->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Pillajo']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
       </div>
       <div class="row g-3">
         <div class="col-3 ">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccion', $hoja->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Av.Carvajal']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3 ">
                {{ Form::label('Teléfono') }}
                {{ Form::text('telefono', $hoja->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => '09600000']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-5 ">
            {{ Form::label('Correo  Electrónico') }}
            {{ Form::text('correo', $hoja->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'correo00@gmail.com']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <h3>Formacion Academica</h3>
        <b><hr></b>
        
        <div class="row g-3">
            <div class="col-5">
                {{ Form::label('Bachillerato') }}
                {{ Form::text('colegio', $hoja->colegio, ['class' => 'form-control' . ($errors->has('colegio') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Educativa Dr.Arturo Freire']) }}
                {!! $errors->first('colegio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Ingreso') }}
                {{ Form::text('fechaingreso', $hoja->fechaingreso, ['class' => 'form-control' . ($errors->has('fechaingreso') ? ' is-invalid' : ''), 'placeholder' => '2010']) }}
                {!! $errors->first('fechaingreso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Egreso') }}
                {{ Form::text('fechafin', $hoja->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => '2016']) }}
                {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Universidad/Instituto') }}
                {{ Form::text('uni', $hoja->uni, ['class' => 'form-control' . ($errors->has('uni') ? ' is-invalid' : ''), 'placeholder' => 'Intituto Tecnologico Superior "Yavirac']) }}
                {!! $errors->first('uni', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Ingreso') }}
                {{ Form::text('fechainicio', $hoja->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => '2018']) }}
                {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('Año de Egreso') }}
                {{ Form::text('fechafinal', $hoja->fechafinal, ['class' => 'form-control' . ($errors->has('fechafinal') ? ' is-invalid' : ''), 'placeholder' => '2022']) }}
                {!! $errors->first('fechafinal', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Cursos/Talleres') }}
                {{ Form::text('curso', $hoja->curso, ['class' => 'form-control' . ($errors->has('curso') ? ' is-invalid' : ''), 'placeholder' => 'Java Script']) }}
                {!! $errors->first('curso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div <div class="col-2 ">
                {{ Form::label('Año Inicio') }}
                {{ Form::text('fechaini', $hoja->fechaini, ['class' => 'form-control' . ($errors->has('fechaini') ? ' is-invalid' : ''), 'placeholder' => '2020']) }}
                {!! $errors->first('fechaini', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div <div class="col-2 ">
                {{ Form::label('Año Fin') }}
                {{ Form::text('fechafi', $hoja->fechafi, ['class' => 'form-control' . ($errors->has('fechafi') ? ' is-invalid' : ''), 'placeholder' => '2020']) }}
                {!! $errors->first('fechafi', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br>
        <h3>Experiencia Laboral</h3>
        <b><hr></b>
        

    </div>
    &nbsp
    &nbsp
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
        &nbsp
        &nbsp
        <a class="btn btn-primary" href="{{ route('hojas.index') }}"> Atras</a>

    </div>
    
</div>