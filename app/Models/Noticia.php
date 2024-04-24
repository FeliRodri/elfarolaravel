<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Noticia
 *
 * @property $id
 * @property $categoria_id
 * @property $titulo
 * @property $descripcion
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Noticia extends Model
{

  static $rules = [
    'categoria_id' => 'required',
    'titulo' => 'required',
    'descripcion' => 'required',
    'imagen' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['categoria_id', 'titulo', 'descripcion', 'imagen'];


  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function categoria()
  {
    return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
  }


}