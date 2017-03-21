<?php

class Controller
{
    protected function model($model)
    {
        if (file_exists('../app/models/'.$model.'.php')) {
            //$this->model = $model;
            require_once ('../app/models/'.$model.'.php');
            return new $model();
        }
    }
    
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/'.$view.'.php')) {
            //$this->model = $model;
            require_once ('../app/views/header.php');
            require_once ('../app/views/'.$view.'.php');
            require_once ('../app/views/footer.php');
            $view = explode('/', $view);
            new $view[0];
        }
    }
}