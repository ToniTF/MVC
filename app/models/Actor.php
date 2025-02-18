<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;
class Actor extends Model{
    protected $table = 'actor';//por defecto es el nombre de la clase en minusculas y plural
    protected $primaryKey = 'actor_id';//por defecto es id
    public $timestamps = false;//por defecto es true
}
?>