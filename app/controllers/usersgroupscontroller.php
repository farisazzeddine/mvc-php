<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\PrivilegeModel;
use PHPMVC\Models\UserGroupModel;
use PHPMVC\Models\UserGroupPrivilegeModel;

class UsersGroupsController extends AbstractController
{
    use Helper;
    use InputFilter;
    public function defaultAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('usersgroups.default');
        $this->_data['groups']=UserGroupModel::getAll();
        $this->_view();

    }
    public function createAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('usersgroups.labels');
        $this->_language->load('usersgroups.create');
        $this->_data['privileges']=PrivilegeModel::getAll();
        if(isset($_POST['submit'])){
            $groupe = new UserGroupModel();
            $groupe->Group_name=$this->filterString($_POST['Group_name']);
            if($groupe->save()){
                if(isset($_POST['privileges']) && is_array($_POST['privileges'])){
                    foreach ($_POST['privileges'] as $privilege_id) {
                        $group_privileges= new UserGroupPrivilegeModel();
                        $group_privileges->Group_id=$groupe->Group_id;
                        $group_privileges->Privilege_id=$privilege_id;
                        $group_privileges->save();
                    }
                }


                $this->redirect('/usersgroups');
            }
        }
        $this->_view();
    }

}