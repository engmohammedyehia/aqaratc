<?php
namespace PHPMVC\Controllers;


class BuyController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('buy.default');



        $this->_view();
    }
}




