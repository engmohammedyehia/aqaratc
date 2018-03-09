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
        if(isset($this->session->u)) {
            $this->redirect('/');
        }

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

    public function registerAction()
    {
        if(isset($this->session->u)) {
            $this->redirect('/');
        }

        $this->language->load('auth.register');

        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles, $_POST)) {

            $user = new UserModel();
            $user->Username = $this->filterString($_POST['Username']);
            $user->cryptPassword($_POST['Password']);
            $user->Email = $this->filterString($_POST['Email']);
            $user->PhoneNumber = $this->filterString($_POST['PhoneNumber']);
            $user->GroupId = 2;
            $user->SubscriptionDate = date('Y-m-d');
            $user->LastLogin = date('Y-m-d H:i:s');
            $user->Status = 1;

            if(UserModel::userExists($user->Username)) {
                $this->messenger->add($this->language->get('message_user_exists'), Messenger::APP_MESSAGE_ERROR);
                goto problem;
            }

            if(UserModel::emailExists($user->Email)) {
                $this->messenger->add($this->language->get('message_email_exists'), Messenger::APP_MESSAGE_ERROR);
                goto problem;
            }

            if($user->save()) {
                $userProfile = new UserProfileModel();
                $userProfile->UserId = $user->UserId;
                $userProfile->FirstName = $this->filterString($_POST['FirstName']);
                $userProfile->LastName = $this->filterString($_POST['LastName']);
                $userProfile->save(false);
                $this->messenger->add($this->language->get('message_create_success'));
            } else {
                $this->messenger->add($this->language->get('message_create_failed'), Messenger::APP_MESSAGE_ERROR);
            }
            $this->redirect('/users');
        }

        problem:
        $this->_view();
    }

    public function logoutAction()
    {
        // TODO: check the cookie deletion
        $this->session->kill();
        $this->redirect('/auth/login');
    }
}