<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;

class IndexController extends AbstractController
{
    use Helper;

    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('index.default');

        if(isset($_POST['submit'])) {
            $this->messenger->add($this->language->get('text_consult_success'));
            $this->redirect('/#success');
        }

        $this->_view();
    }
}




