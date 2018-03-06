<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    public function defaultAction()
    {
    	echo '<pre>';
    	echo 'hello there';
    	echo '</pre>';
    }
}