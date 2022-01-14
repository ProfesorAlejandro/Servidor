<?php


class HomeController{

    public function index(){
        require_once 'view/form.php';
    }

    public function procesandoInfo(){
        if(isset($_POST['btn_submit'])){
            $info = $_POST['numero'];
            require_once 'view/result.php';
        }
    }




}