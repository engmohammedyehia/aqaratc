<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    public function defaultAction()
    {
    	echo '<pre>';
    	var_dump($this);
    	echo '</pre>';
    }
}