<?php
require_once("./core/Controller.php");
class ActorController extends Controller{
public function index(...$params){//los tres puntos indican que se recibirá un número variable de parámetros
    echo "Hola desde Index de ActorController";
    }
}
?>