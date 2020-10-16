<?php
namespace PHPMVC\Controllers;


use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Messenger;
use PHPMVC\LIB\Validate;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserModel;
use PHPMVC\Models\UserProfileModel;

class UsersController extends AbstractController
{
    use Validate;
    use InputFilter;
    use Helper;
    private $_createActionRoles=
    [
    'FirstName'     =>'req|alpha',
    'LastName'      =>'req|alpha',
    'Username'      =>'req|alphanum',
    'Email'         =>'req|email|eq_field(CEmail)',
    'CEmail'        =>'req|email',
    'Password'      =>'req|min(6)|eq_field(c_Password)',
    'c_Password'    =>'req|min(6)',
    'PhoneNumber'   =>'alphanum|max(15)',
    'Group_id'      =>'req|int',
    ];
    private $_editActionRoles=
        [
            'PhoneNumber'   =>'alphanum|max(15)',
            'Group_id'      =>'req|int',
        ];
    public function defaultAction()
    {
        $this->language->load('template.common');
        $this->language->load('users.default');
        $this->_data['users']=UserModel::getUsers($this->session->u);
        $this->_view();

    }
    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('users.create');
        $this->language->load('users.labels');
        $this->language->load('users.messages');
        $this->language->load('validation.errors');
        $this->_data['groups']=UserGroupModel::getAll();
        if(isset($_POST['submit']) && $this->isValid($this->_createActionRoles,$_POST)){
            $user=new UserModel();
            $user->Username = $this->filterString($_POST['Username']);
            $user->cryptPassword($_POST['Password']);
            $user->Email = $this->filterString($_POST['Email']);
            $user->PhoneNumber = $this->filterString($_POST['PhoneNumber']);
            $user->Group_id = $this->filterInt($_POST['Group_id']);

            $user->SubscriptionDate=date('Y-m-d');
            $user->LastLogin=date('Y-m-d H:i:s');
            $user->status=1;
            if(UserModel::userExists($user->Username)){
                $this->messenger->add($this->language->get('message_user_exists'),Messenger::APP_MESSAGE_ERROR);
                $this->redirect('/users/create');
            }
            //TODO::SEND THE USER WELCOME EMAIL
            if($user->save()){
                $userProfile = new UserProfileModel();
                $userProfile->User_id= $user->User_id;
                $userProfile->FirstName = $this->filterString($_POST['FirstName']);
                $userProfile->LastName  = $this->filterString($_POST['LastName']);
                $userProfile->save(false);
                $this->messenger->add($this->language->get('message_create_success'));
                $this->redirect('/users');
            }else{
                $this->messenger->add($this->language->get('message_create_failed'),Messenger::APP_MESSAGE_ERROR);
            }

        }
        $this->_view();
    }
    //TODO:: make sure this is a AJAX Request
    //TODO:: explaine the different type of headers used in this courses
    public function checkUserExistsAjaxAction()
    {
        if(isset($_POST['Username'])){
            header('Content-type:text/plain');
            if(UserModel::userExists($this->filterString($_POST['Username'])) !== false){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function editAction()
    {
        $id=$this->filterInt($this->_params[0]);
        $user=UserModel::getByPk($id);
        if($user===false || $this->session->u->User_id == $id){
            $this->redirect('/users');
        }
        $this->language->load('template.common');
        $this->language->load('users.edit');
        $this->language->load('users.labels');
        $this->language->load('users.messages');
        $this->language->load('validation.errors');
        $this->_data['groups']=UserGroupModel::getAll();
        $this->_data['user']=$user;
        if(isset($_POST['submit']) && $this->isValid($this->_editActionRoles,$_POST)){

            $user->PhoneNumber = $this->filterString($_POST['PhoneNumber']);
            $user->Group_id = $this->filterInt($_POST['Group_id']);


            if($user->save()){
                $this->messenger->add($this->language->get('message_edit_success'));
                $this->redirect('/users');
            }else{
                $this->messenger->add($this->language->get('message_edit_failed'),Messenger::APP_MESSAGE_ERROR);
            }

        }
        $this->_view();
    }
    public function deleteAction()
    {
        $id=$this->filterInt($this->_params[0]);
        $user=UserModel::getByPk($id);
        if($user===false || $this->session->u->User_id == $id){
            $this->redirect('/users');
        }
        $this->language->load('users.messages');

        if($user->delete()){
            $this->messenger->add($this->language->get('message_delete_success'));

        }else{
            $this->messenger->add($this->language->get('message_delete_failed'),Messenger::APP_MESSAGE_ERROR);
        }
        $this->redirect('/users');

    }

}