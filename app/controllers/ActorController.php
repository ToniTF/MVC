<?php
require_once("./core/Controller.php");
class ActorController extends Controller
{
    public function index(...$params)
    { //los tres puntos indican que se recibirá un número variable de parámetros
        echo "Hola desde Index de ActorController";
    }
    public function new(...$params)
    {
        if(isset($_POST["first_name"])){//Si se ha recibido un nombre
            echo "Se ha recibido un nuevo actor";
    }else{
        $this->view("new_actor");
    }
    }
}
