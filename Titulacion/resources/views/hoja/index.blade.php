@extends('layouts.app')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@section('template_title')
    Hoja
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hoja') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hojas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
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

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hojas as $hoja)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
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

                                            <td>
                                                <form action="{{ route('hojas.destroy',$hoja->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hojas.show',$hoja->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hojas.edit',$hoja->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $hojas->links() !!}
            </div>
        </div>
    </div>
@endsection
