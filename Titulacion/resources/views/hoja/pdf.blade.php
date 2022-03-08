<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hoja de Vida</h2>
    <table class="table table-striped table-hover">
        <thead class="thead">
            <tr>  
                <th>Cedula</th>
                <th>Nombreuno</th>
                <th>Nombredos</th>
                <th>Apellidouno</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Colegio</th>
                <th>Fechaingreso</th>
                <th>Fechafin</th>
                <th>Uni</th>
                <th>Fechainicio</th>
                <th>Fechafinal</th>
                <th>Curso</th>
                <th>Fechaini</th>
                <th>Fechafi</th>
                <th>Empresa</th>
                <th>Cargo</th>
                <th>Descripcion</th>
                <th>Periodouno</th>
                <th>Periododos</th>
                <th>Empresados</th>
                <th>Cargodos</th>
                <th>Descripciondos</th>
                <th>Periodou</th>
                <th>Periodod</th>
                <th>Idioma</th>
                <th>Nivel</th>
                <th>Idiomados</th>
                <th>Niveldos</th>
                <th>Areau</th>
                <th>Conocimientou</th>
                <th>Nivelu</th>
                <th>Aread</th>
                <th>Conocimientod</th>
                <th>Niveld</th>
                <th>Areat</th>
                <th>Conocimientot</th>
                <th>Niveltr</th>
                <th>Nom</th>
                <th>Relacion</th>
                <th>Contacto</th>
                <th>Nomu</th>
                <th>Relaciond</th>
                <th>Contactod</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hojas as $hoja)
                <tr>
                    
                    <td>{{ $hoja->cedula }}</td>
                    <td>{{ $hoja->nombreuno }}</td>
                    <td>{{ $hoja->nombredos }}</td>
                    <td>{{ $hoja->apellidouno }}</td>
                    <td>{{ $hoja->apellidos }}</td>
                    <td>{{ $hoja->direccion }}</td>
                    <td>{{ $hoja->telefono }}</td>
                    <td>{{ $hoja->correo }}</td>
                    <td>{{ $hoja->colegio }}</td>
                    <td>{{ $hoja->fechaingreso }}</td>
                    <td>{{ $hoja->fechafin }}</td>
                    <td>{{ $hoja->uni }}</td>
                    <td>{{ $hoja->fechainicio }}</td>
                    <td>{{ $hoja->fechafinal }}</td>
                    <td>{{ $hoja->curso }}</td>
                    <td>{{ $hoja->fechaini }}</td>
                    <td>{{ $hoja->fechafi }}</td>
                    <td>{{ $hoja->empresa }}</td>
                    <td>{{ $hoja->cargo }}</td>
                    <td>{{ $hoja->descripcion }}</td>
                    <td>{{ $hoja->periodouno }}</td>
                    <td>{{ $hoja->periododos }}</td>
                    <td>{{ $hoja->empresados }}</td>
                    <td>{{ $hoja->cargodos }}</td>
                    <td>{{ $hoja->descripciondos }}</td>
                    <td>{{ $hoja->periodou }}</td>
                    <td>{{ $hoja->periodod }}</td>
                    <td>{{ $hoja->idioma }}</td>
                    <td>{{ $hoja->nivel }}</td>
                    <td>{{ $hoja->idiomados }}</td>
                    <td>{{ $hoja->niveldos }}</td>
                    <td>{{ $hoja->areau }}</td>
                    <td>{{ $hoja->conocimientou }}</td>
                    <td>{{ $hoja->nivelu }}</td>
                    <td>{{ $hoja->aread }}</td>
                    <td>{{ $hoja->conocimientod }}</td>
                    <td>{{ $hoja->niveld }}</td>
                    <td>{{ $hoja->areat }}</td>
                    <td>{{ $hoja->conocimientot }}</td>
                    <td>{{ $hoja->niveltr }}</td>
                    <td>{{ $hoja->nom }}</td>
                    <td>{{ $hoja->relacion }}</td>
                    <td>{{ $hoja->contacto }}</td>
                    <td>{{ $hoja->nomu }}</td>
                    <td>{{ $hoja->relaciond }}</td>
                    <td>{{ $hoja->contactod }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>