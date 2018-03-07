<?php
namespace PHPMVC\Controllers;


class HomeValuationController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('homevaluation.default');

        $this->_view();
    }
}




