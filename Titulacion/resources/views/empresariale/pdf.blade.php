<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProyectoEmpresarial</title>
</head>
<body>
<img src="https://www.preuniversitarionewton.com/web/images/preuniversitario/noticias/senescyt_logo.png"
     width="300"
     height="101">
     <img src="http://userscontent2.emaze.com/images/33c58489-cf42-4a76-9ca4-94bb149cfa8d/Slide7_Pic3_636408719339374930.png"
     align="right"
    padding-top="100"
     width="200"
     height="90">
<div align="center">
    <h2>PLANEACIÓN PROYECTO EMPRESARIAL</h2>
</div>
<table class="table table-striped table-hover">
<thead class="thead">
@foreach ($empresariales as $empresariale)
  <tr>
  <th scope="row" align="left">Nombre Estudiante</th>
      <td colspan="2">{{ $empresariale->nom_estudiante }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Carrera</th>
  <td>{{ $empresariale->carrera }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Nivel</th>
  <td colspan="2">{{ $empresariale->nivel }}</td>
  <th scope="row" align="left">Período Lectivo</th>
  <td colspan="2">{{ $empresariale->pe_lectivo }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Entidad Formadora</th>
      <td colspan="2">{{ $empresariale->ent_formadora }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Horas de Formación Prácticas</th>
      <td colspan="2">{{ $empresariale->hr_practicas }}</td>
  </tr><br><br>
  <tr>
  <th scope="row" align="left">Titulo del Proyecto</th>
      <td colspan="2">{{ $empresariale->tit_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Analisis de la situación</th>
      <td colspan="2">{{ $empresariale->analisis }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Objetivo del Proyecto</th>
      <td colspan="2">{{ $empresariale->obj_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Descripcion del Proyecto</th>
      <td colspan="2">{{ $empresariale->des_proyecto }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Indicador</th>
  <td colspan="2">{{ $empresariale->indicador }}</td>
  <th scope="row" align="left">Medicion/Formula</th>
  <td colspan="2">{{ $empresariale->medicion }}</td>
  </tr>
  <tr>
  <th scope="row" align="left">Meta</th>
  <td colspan="2">{{ $empresariale->meta }}</td>
  <th scope="row" align="left">Fuente de Datos</th>
  <td colspan="2">{{ $empresariale->fuente }}</td>
  </tr>
  <th scope="row" align="left">Presupuesto</th>
  <td colspan="2">{{ $empresariale->meta }}</td>
  <th scope="row" align="left">Beneficios Esperados</th>
  <td colspan="2">{{ $empresariale->beneficios }}</td>
  </tr><br><br>
  @endforeach
</table>
<br><br>
<h4>Comentarios</h4>
<p>{{ $empresariale->comentarios }}</p><br><br><br><br><br><br><br><br>
<div style="width:230px; height:auto; float:left; display:inline">
        <hr width="100"/>
        <p align="center">Coordinador de Carrera</p>
        <p align="center">{{ $empresariale->cor_carrera }}</p>
</div> 
<div style="width:200px; height:auto; float:left; display:inline"> 
        <hr width="100"/>
        <p align="center">Estudiante</p>
        <p align="center">{{ $empresariale->nom_estudiante }}</p></div> 
</div>
<div style="width:200px; height:auto; float:left; display:inline">
    <hr width="100"/>
    <p align="center">Tutor Empresarial</p>
    <p align="center">{{ $empresariale->tut_empresa }}</p>
    </div>    
</div> 
</body>
</html>
                    
