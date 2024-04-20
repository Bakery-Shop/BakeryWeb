<?php
class Controller{
    protected $views, $model;
    public function __construct(){
        $this->views = new Views();
        $this->cargarModel();
    }

    public function cargarModel()
    {
        $className = get_class($this);
        $model = str_replace('Controller', 'Model', $className);
        $ruta = "Models/" . $model . ".php";
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();
        }
    }
}
?>