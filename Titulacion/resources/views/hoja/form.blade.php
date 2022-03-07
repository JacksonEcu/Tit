<div class="box box-info padding-1">
    <div class="box-body">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="row g-3">
        <div class="col-3 ">
            <h3>Datos Personales</h3>
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $hoja->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="row g-3">
            <div class="col-3 ">
                {{ Form::label('nombreuno',) }}
                {{ Form::text('nombreuno', $hoja->nombreuno, ['class' => 'form-control' . ($errors->has('nombreuno') ? ' is-invalid' : ''), 'placeholder' => 'Nombreuno']) }}
                {!! $errors->first('nombreuno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('nombredos') }}
                {{ Form::text('nombredos', $hoja->nombredos, ['class' => 'form-control' . ($errors->has('nombredos') ? ' is-invalid' : ''), 'placeholder' => 'Nombredos']) }}
                {!! $errors->first('nombredos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('apellidouno') }}
                {{ Form::text('apellidouno', $hoja->apellidouno, ['class' => 'form-control' . ($errors->has('apellidouno') ? ' is-invalid' : ''), 'placeholder' => 'Apellidouno']) }}
                {!! $errors->first('apellidouno', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-3 ">
                {{ Form::label('apellidos') }}
                {{ Form::text('apellidos', $hoja->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
                {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
            </div>
       </div>
       <div class="row g-3">
         <div class="col-3 ">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $hoja->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-3 ">
                {{ Form::label('telefono') }}
                {{ Form::text('telefono', $hoja->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-5 ">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $hoja->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <h3>Formacion Academica</h3>
        <hr />
        
        <div class="row g-3">
            <div class="col-5">
                {{ Form::label('colegio') }}
                {{ Form::text('colegio', $hoja->colegio, ['class' => 'form-control' . ($errors->has('colegio') ? ' is-invalid' : ''), 'placeholder' => 'Colegio']) }}
                {!! $errors->first('colegio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('fechaingreso') }}
                {{ Form::text('fechaingreso', $hoja->fechaingreso, ['class' => 'form-control' . ($errors->has('fechaingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fechaingreso']) }}
                {!! $errors->first('fechaingreso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('fechafin') }}
                {{ Form::text('fechafin', $hoja->fechafin, ['class' => 'form-control' . ($errors->has('fechafin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
                {!! $errors->first('fechafin', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('uni') }}
                {{ Form::text('uni', $hoja->uni, ['class' => 'form-control' . ($errors->has('uni') ? ' is-invalid' : ''), 'placeholder' => 'Uni']) }}
                {!! $errors->first('uni', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('fechainicio') }}
                {{ Form::text('fechainicio', $hoja->fechainicio, ['class' => 'form-control' . ($errors->has('fechainicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
                {!! $errors->first('fechainicio', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-2 ">
                {{ Form::label('fechafinal') }}
                {{ Form::text('fechafinal', $hoja->fechafinal, ['class' => 'form-control' . ($errors->has('fechafinal') ? ' is-invalid' : ''), 'placeholder' => 'Fechafinal']) }}
                {!! $errors->first('fechafinal', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('curso') }}
                {{ Form::text('curso', $hoja->curso, ['class' => 'form-control' . ($errors->has('curso') ? ' is-invalid' : ''), 'placeholder' => 'Curso']) }}
                {!! $errors->first('curso', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div <div class="col-2 ">
                {{ Form::label('fechaini') }}
                {{ Form::text('fechaini', $hoja->fechaini, ['class' => 'form-control' . ($errors->has('fechaini') ? ' is-invalid' : ''), 'placeholder' => 'Fechaini']) }}
                {!! $errors->first('fechaini', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div <div class="col-2 ">
                {{ Form::label('fechafi') }}
                {{ Form::text('fechafi', $hoja->fechafi, ['class' => 'form-control' . ($errors->has('fechafi') ? ' is-invalid' : ''), 'placeholder' => 'Fechafi']) }}
                {!! $errors->first('fechafi', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>