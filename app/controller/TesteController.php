<?php

namespace app\controller;

class TesteController
{
    public function __construct()
    {
        echo 'estamos dentro do controller';
    }

    public function teste()
    {
        return ['nome' => 'gustavo'];
    }
}