@extends('layouts.app')

@section('template_title')
    {{ $rubrica->name ?? 'Show Rubrica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Rubrica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rubricas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom Estudiante:</strong>
                            {{ $rubrica->nom_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel:</strong>
                            {{ $rubrica->nivel }}
                        </div>
                        <div class="form-group">
                            <strong>Pe Lectivo:</strong>
                            {{ $rubrica->pe_lectivo }}
                        </div>
                        <div class="form-group">
                            <strong>Ent Formadora:</strong>
                            {{ $rubrica->ent_formadora }}
                        </div>
                        <div class="form-group">
                            <strong>Tut Empresa:</strong>
                            {{ $rubrica->tut_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Tut Instituto:</strong>
                            {{ $rubrica->tut_instituto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Evaluacion:</strong>
                            {{ $rubrica->fecha_evaluacion }}
                        </div>
                        <div class="form-group">
                            <strong>Hr Practica:</strong>
                            {{ $rubrica->hr_practica }}
                        </div>
                        <div class="form-group">
                            <strong>Desde:</strong>
                            {{ $rubrica->desde }}
                        </div>
                        <div class="form-group">
                            <strong>Hasta:</strong>
                            {{ $rubrica->hasta }}
                        </div>
                        <div class="form-group">
                            <strong>Ent Documento:</strong>
                            {{ $rubrica->ent_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Pres Proyecto:</strong>
                            {{ $rubrica->pres_proyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Ad Conocimiento:</strong>
                            {{ $rubrica->ad_conocimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Ap Conocimiento:</strong>
                            {{ $rubrica->ap_conocimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Sum Uno:</strong>
                            {{ $rubrica->sum_uno }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Uno:</strong>
                            {{ $rubrica->pro_uno }}
                        </div>
                        <div class="form-group">
                            <strong>Prom Evaluacion:</strong>
                            {{ $rubrica->prom_evaluacion }}
                        </div>
                        <div class="form-group">
                            <strong>Pre Proyecto:</strong>
                            {{ $rubrica->pre_proyecto }}
                        </div>
                        <div class="form-group">
                            <strong>Cum Objetivo:</strong>
                            {{ $rubrica->cum_objetivo }}
                        </div>
                        <div class="form-group">
                            <strong>Actitud:</strong>
                            {{ $rubrica->actitud }}
                        </div>
                        <div class="form-group">
                            <strong>Sum Dos:</strong>
                            {{ $rubrica->sum_dos }}
                        </div>
                        <div class="form-group">
                            <strong>Pro Dos:</strong>
                            {{ $rubrica->pro_dos }}
                        </div>
                        <div class="form-group">
                            <strong>Cal Instituto:</strong>
                            {{ $rubrica->cal_instituto }}
                        </div>
                        <div class="form-group">
                            <strong>Cal Empresa:</strong>
                            {{ $rubrica->cal_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Cal Final:</strong>
                            {{ $rubrica->cal_final }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
