<?php

require_once 'ApplicationController.php';

class SecurityController extends ApplicationController
{
    public function login()
    {
        $this->render('index');
    }
}