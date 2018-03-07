<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\lib\Messenger;
use PHPMVC\Models\UserModel;

class AuthController extends AbstractController
{
    use Helper;
    use InputFilter;

    public function loginAction()
    {
        $this->language->load('auth.login');

        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])) {
            $isAuthorized = UserModel::authenticate($this->filterString($_POST['username']), $_POST['password'], $this->session);
            if($isAuthorized instanceof UserModel) {
                $this->redirect('/');
            } elseif ((int) $isAuthorized == 2) {
                $this->messenger->add($this->language->get('text_user_disabled'), Messenger::APP_MESSAGE_ERROR);
            } else {
                $this->messenger->add($this->language->get('text_user_not_found'), Messenger::APP_MESSAGE_ERROR);
            }
        }

        $this->_view();
    }

    public function authenticateAction()
    {
        if(isset($_POST['ucname']) && isset($_POST['ucpwd'])) {
            $isAuthorized = UserModel::authenticate($_POST['ucname'], $_POST['ucpwd'], $this->session);
            if($isAuthorized === false) {
                echo 3;
            } elseif ($isAuthorized instanceof UserModel) {
                $this->session->tu = $isAuthorized;
                echo 1;
            } elseif ($isAuthorized == 2) {
                echo 2;
            }
        }
    }

    public function logoutAction()
    {
        // TODO: check the cookie deletion
        $this->session->kill();
        $this->redirect('/auth/login');
    }
}