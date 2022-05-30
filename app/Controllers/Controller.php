<?php

namespace Kel1\ProjekAkhirPemweb\Controllers;

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/Views/' . $view . '.php';
    }

    public function show($path, $data = [])
    {
        $this->view('templates/header');
        $this->view($path, $data);
        $this->view('templates/footer');
    }

    public function model($model, $data = [])
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
