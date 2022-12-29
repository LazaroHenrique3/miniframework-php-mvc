<?php

//NameSpace deve ser compátivel com o diretório
namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{

    //Rotas existentes, e define qual controlador será executado
    protected function initRoutes()
    {

        //Configurando as rotas
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );


        $this->setRoutes($routes);
    }
}
