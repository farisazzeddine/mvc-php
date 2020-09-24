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
    public function editAction()
    {
        $id=$this->filterInt($this->_params[0]);
        $groupe=UserGroupModel::getByPk($id);
        $this->_data['groupe']=$groupe;
        if($groupe === false){
            $this->redirect('/usersgroups');
        }
        $this->_language->load('template.common');
        $this->_language->load('usersgroups.labels');
        $this->_language->load('usersgroups.edit');
        $this->_data['privileges']=PrivilegeModel::getAll();
        $groupPrivileges=UserGroupPrivilegeModel::getBy(['Group_id' => $groupe->Group_id]);
        $extractPrivilegesId=[];
        if(false !== $groupPrivileges ){
            foreach ($groupPrivileges as $privilege){
                $extractPrivilegesId[]=$privilege->Privilege_id;
            }
        }
        $this->_data['groupPrivileges']= $extractPrivilegesId;

        if(isset($_POST['submit'])){

            $groupe->Group_name=$this->filterString($_POST['Group_name']);



            if($groupe->save()){

                if(isset($_POST['privileges']) && is_array($_POST['privileges'])){
                    $privileges_id_tobe_deleted = array_diff($extractPrivilegesId,$_POST['privileges']);
                    $privileges_id_tobe_added = array_diff($_POST['privileges'],$extractPrivilegesId);

                    //Delete  the unwanted privileges
                    foreach ($privileges_id_tobe_deleted as $deletedPrivilege){
                        $unwanted_Privilege = UserGroupPrivilegeModel::getBy(['Privilege_id' => $deletedPrivilege, 'Group_id' =>$groupe->Group_id]);
                        $unwanted_Privilege->current()->delete();
                    }
                    //Add  the new  privileges
                    foreach ($privileges_id_tobe_added as $privilege_id) {
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

    public function deleteAction()
    {
        $id=$this->filterInt($this->_params[0]);
        $groupe=UserGroupModel::getByPk($id);

        if($groupe === false){
            $this->redirect('/usersgroups');
        }
        $groupPrivileges=UserGroupPrivilegeModel::getBy(['Group_id' => $groupe->Group_id]);
        if (false !==$groupPrivileges ){
            foreach($groupPrivileges as $groupPrivilege){
                $groupPrivilege->delete();
            }
        }

        if($groupe->delete()){
            $this->redirect('/usersgroups');
        }



    }
}