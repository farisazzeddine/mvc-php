<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Messenger;
use PHPMVC\Models\PrivilegeModel;
use PHPMVC\Models\UserGroupPrivilegeModel;


class PrivilegesController extends AbstractController
{
    use InputFilter;
    use Helper;
    public function defaultAction()
    {

        $this->language->load('template.common');
        $this->language->load('privileges.default');
        $this->_data['privileges']=PrivilegeModel::getAll();
        $this->_view();

    }

    public function createAction()
    {
        $this->language->load('template.common');
        $this->language->load('privileges.labels');
        $this->language->load('privileges.create');
        if(isset($_POST['submit'])){
            $privilege=new PrivilegeModel();
            $privilege->PrivilegeTitle=$this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege=$this->filterString($_POST['Privilege']);
           if($privilege->save()){
               $this->messenger->add('privilege crée avec succès');
               $this->messenger->add('privilege crée avec succès',Messenger::APP_MESSAGE_ERROR);
               $this->messenger->add('privilege crée avec succès',Messenger::APP_MESSAGE_WARNING);
               $this->messenger->add('privilege crée avec succès',Messenger::APP_MESSAGE_INFO);
               $this->redirect('/privileges');
           }
        }
        $this->_view();
    }
    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $privilege= PrivilegeModel::getByPk($id);
        if($privilege === false){
            $this->redirect('/privileges');
        }
        $this->_data['privilege']=$privilege;
        $this->language->load('template.common');
        $this->language->load('privileges.labels');
        $this->language->load('privileges.edit');
        if(isset($_POST['submit'])){

            $privilege->PrivilegeTitle=$this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege=$this->filterString($_POST['Privilege']);
            if($privilege->save()){
                $this->redirect('/privileges');
            }
        }
        $this->_view();
    }
    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $privilege= PrivilegeModel::getByPk($id);
        if($privilege === false){
            $this->redirect('/privileges');
        }
        $groupPrivileges=UserGroupPrivilegeModel::getBy(['Privilege_id' => $privilege->Privilege_id]);
        if(false !== $groupPrivileges){
            foreach($groupPrivileges as $groupPrivilege){
                $groupPrivilege->delete();
            }
        }
        if($privilege->delete()){
            $this->redirect('/privileges');
        }

    }


}