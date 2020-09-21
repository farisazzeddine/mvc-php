<?php
namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\PrivilegeModel;
 

class PrivilegesController extends AbstractController
{
    use InputFilter;
    use Helper;
    public function defaultAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('privileges.default');
        $this->_data['privileges']=PrivilegeModel::getAll();
        $this->_view();

    }

    public function createAction()
    {
        $this->_language->load('template.common');
        $this->_language->load('privileges.labels');
        $this->_language->load('privileges.create');
        if(isset($_POST['submit'])){
            $privilege=new PrivilegeModel();
            $privilege->PrivilegeTitle=$this->filterString($_POST['PrivilegeTitle']);
            $privilege->Privilege=$this->filterString($_POST['Privilege']);
           if($privilege->save()){
                $this->redirect('/privileges');
           }
        }
        $this->_view();
    }


}