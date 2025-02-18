<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Films;

class FilmController extends Controller{
    public function index(...$params){
        $films=Films::all();
       $this->view("film_list", $films);
        //echo "hola desde index de ActorController";
    }
    public function new(...$params){
        if(isset($_POST["first_name"])){
            var_dump($_POST);
            exit();
        }else{
            $this->view("new_film"); 
        }
       
    }
    public function json(){
        $films=Films::where("title","like","P%")->get();
        $datos=[
            "mensaje"=>"Listado de peliculas empiezan por P",
            "listado"=>$films
        ];
        $json=json_encode($datos);
        header('Content-Type: application/json');//establece la cabecera de la respuesta, en este caso que es un json
        echo $json;
        exit();
    }

}
?>