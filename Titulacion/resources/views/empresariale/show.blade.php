@extends('layouts.app')

@section('template_title')
    {{ $empresariale->name ?? 'Show Empresariale' }}
@endsection

@section('content')
    <section class="content container-fluid">
            <div class="col-md-12">
                <div class="card">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4"><img src="https://www.preuniversitarionewton.com/web/images/preuniversitario/noticias/senescyt_logo.png" 
                                alt="logo" style="inline-size:auto;"
                                width="400px" height="100px"> </div>
                             <div class="col-4"><img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png" 
                                     alt="logo" style="inline-size:auto;"
                                     width="400px" height="100px"> </div>
                </div>
            </div>
                    <div class="card-header">
                    <div align="center">
                        <h2>PLANEACIÓN PROYECTO EMPRESARIAL</h2>
                    </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresariales.index') }}"> Página inicial</a>
                        </div>
                    </div>

                    <table class="table table-bordered">
  <thead>
<tbody>
<tr>
    <th scope="row">Nombre Estudiante</th>
      <td colspan="2">{{ $empresariale->nom_estudiante }}</td>
    </tr>
    <th scope="row">Carrera</th>
      <td colspan="2">{{ $empresariale->carrera }}</td>
    </tr>
    <th scope="row">Nivel</th>
      <td colspan="2">{{ $empresariale->nivel }}</td>
    </tr>
    <th scope="row">Período Lectivo</th>
      <td colspan="2">{{ $empresariale->pe_lectivo }}</td>
    </tr>
    <th scope="row">Entidad Formadora</th>
      <td colspan="2">{{ $empresariale->ent_formadora }}</td>
    </tr>
    <th scope="row">Horas de Formación Prácticas</th>
      <td colspan="2">{{ $empresariale->hr_practicas }}</td>
    </tr>
    <th scope="row">Títullo Proyecto</th>
      <td colspan="2">{{ $empresariale->tit_proyecto }}</td>
    </tr>
    <th scope="row">Analisis</th>
      <td colspan="2">{{ $empresariale->analisis }}</td>
    </tr>
    <th scope="row">Objetivo Proyecto</th>
      <td colspan="2">{{ $empresariale->obj_proyecto }}</td>
    </tr>
    <th scope="row">Descripcion del Proyecto</th>
      <td colspan="2">{{ $empresariale->des_proyecto }}</td>
    </tr>
    <th scope="row">Indicador</th>
      <td colspan="2">{{ $empresariale->indicador }}</td>
    </tr>
    <th scope="row">Meta</th>
      <td colspan="2">{{ $empresariale->meta }}</td>
    </tr>
    <th scope="row">Presupuesto</th>
      <td colspan="2">{{ $empresariale->presupuesto }}</td>
    </tr>
    <th scope="row">Medicion</th>
      <td colspan="2">{{ $empresariale->medicion }}</td>
    </tr>
    <th scope="row">Fuente</th>
      <td colspan="2">{{ $empresariale->fuente }}</td>
    </tr>
    <th scope="row">Beneficios Esperados</th>
      <td colspan="2">{{ $empresariale->beneficios }}</td>
    </tr>
    <th scope="row">Comentarios</th>
      <td colspan="2">{{ $empresariale->comentarios }}</td>
    </tr>
     </tbody>
</table>
<div>
<hr style="inline-size:15%;"/>
  <p>{{ $empresariale->nom_estudiante }}</p>
  <hr style="inline-size:15%;"/>
  <p>{{ $empresariale->nom_estudiante }}</p>
  <hr style="inline-size:15%;"/>
  <p>{{ $empresariale->nom_estudiante }}</p>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
