<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\UserModel;

class ActivateController extends AbstractController
{
    use Helper;
    use InputFilter;

    public function defaultAction()
    {
        $this->language->load('auth.activate');

        $code = $this->filterString(@$_GET['code']);
        $user = UserModel::getUserByActivationCode($code);

        if(false !== $user) {
            $user->Activation = '';
            $user->Status = 1;
            $this->messenger->add($this->language->get('text_user_activated'));
            $this->redirect('/auth/login');
        } else {
            $this->redirect('/');
        }
    }
}