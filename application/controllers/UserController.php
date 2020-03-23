<?php


namespace application\controllers;
use application\core\Controller;

class UserController extends Controller
{
    public function userAction(){
        $result = $this->model->getUser();
        $vars = [
            'user'=>$result,
        ];
        $this->view->render('Список пользователей',$vars);
    }
}