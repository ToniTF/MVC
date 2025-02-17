<?php
abstract class Controller{
    abstract public function index(...$params);//Se define un método abstracto index que recibe un número variable de parámetros
    public function view($view,$data=[]){//Se define un método view que recibe el nombre de la vista y un arreglo de datos
        require_once "./app/views/$view.php";//Se incluye la vista
    }
}
?>