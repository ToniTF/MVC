<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;
class Films extends Model{
    protected $table = 'film';//por defecto es el nombre de la clase en minusculas y plural
    protected $primaryKey = 'film_id';//por defecto es id
    public $timestamps = false;//por defecto es true
}
?>