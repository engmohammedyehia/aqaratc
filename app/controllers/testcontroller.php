<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    public function defaultAction()
    {
    	// helper
    	var_dump($this);
    }
}