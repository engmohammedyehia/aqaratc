<?php
namespace PHPMVC\Controllers;


class SellController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('sell.default');

        $this->_view();
    }
}




