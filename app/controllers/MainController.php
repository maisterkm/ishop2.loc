<?php

namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {

//        echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание ... ', 'Ключевые слова ...');

        $name = 'John';
        $age = 30;

        $this->set(compact('name', 'age'));
    }
}