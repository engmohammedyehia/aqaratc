<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    public function defaultAction()
    {
    	var_dump($this);
    }
}