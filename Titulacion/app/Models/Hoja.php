<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hoja
 *
 * @property $id
 * @property $cedula
 * @property $nombreuno
 * @property $nombredos
 * @property $apellidouno
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $colegio
 * @property $fechaingreso
 * @property $fechafin
 * @property $uni
 * @property $fechainicio
 * @property $fechafinal
 * @property $curso
 * @property $fechaini
 * @property $fechafi
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hoja extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'nombreuno' => 'required',
		'nombredos' => 'required',
		'apellidouno' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'colegio' => 'required',
		'fechaingreso' => 'required',
		'fechafin' => 'required',
		'uni' => 'required',
		'fechainicio' => 'required',
		'fechafinal' => 'required',
		'curso' => 'required',
		'fechaini' => 'required',
		'fechafi' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombreuno','nombredos','apellidouno','apellidos','direccion','telefono','correo','colegio','fechaingreso','fechafin','uni','fechainicio','fechafinal','curso','fechaini','fechafi'];



}
