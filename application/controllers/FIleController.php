<?php
namespace application\controllers;
use application\core\Controller;

class FileController extends Controller
{
    public function fileAction(){
        $result = $this->model->getFile();
        $vars = [
            'file'=>$result,
        ];
        $this->view->render('Файлы пользователей',$vars);
    }
}