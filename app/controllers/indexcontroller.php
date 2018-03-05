<?php
namespace PHPMVC\Controllers;

use PHPMVC\Models\ClientModel;
use PHPMVC\Models\TransactionModel;
use PHPMVC\Models\UserModel;

class IndexController extends AbstractController
{
    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('index.default');

        $this->_view();
    }
}




