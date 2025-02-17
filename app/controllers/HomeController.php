<?php
namespace Formacom\controllers;
require_once("./core/Controller.php");
class HomeController extends Controller
{
    public function index(...$params)
    {
        $data = ["mensaje" => "Bienvenido a la página principal"];
        $this->view("home", $data);
    }
    public function new()
    {
        echo "Hola desde NEW de HomeController";
    }
}
