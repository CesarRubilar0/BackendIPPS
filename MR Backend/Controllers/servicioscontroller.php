<?php
require_once '../models/serviciosModel.php';

class ServiciosController {
    private $model;

    public function __construct() {
        $this->model = new ServiciosModel();
    }

    public function getServicios() {
        $servicios = $this->model->getAllServicios();
        require_once '../views/serviciosView.php';
    }
}

$controller = new ServiciosController();
$controller->getServicios();
?>
