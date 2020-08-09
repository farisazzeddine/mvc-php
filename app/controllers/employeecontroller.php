<?php


namespace PHPMVC\Controllers;

use PHPMVC\LIB\Helper;
use PHPMVC\LIB\Language;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController
{
    use InputFilter;
    use Helper;

    public function defaultAction()
    {
//        var_dump($this->_language);
        $this->_language->load('template.common');
        $this->_language->load('employee.default');
        $this->_data['employees'] =EmployeeModel::getAll();
        $this->_view();
    }
    public function addAction()
    {
        $this->_language->load('template.common');
      if(isset($_POST['submit'])){
          $emp = new EmployeeModel();
          $emp->name = $this->filterString($_POST['name']);
          $emp->age = $this->filterInt($_POST['age']);
          $emp->address = $this->filterString($_POST['address']);
          $emp->salary = $this->filterFloat($_POST['salary']);
          $emp->tax = $this->filterFloat($_POST['tax']);
          if($emp->save()){
                $_SESSION['message'] = $emp->name.''.  "<?= $text_form_add_new ?>".''.$emp->id;
              $this->redirect('/employee');
          }
      }
        $this->_view();
    }
    public function editAction()
    {
        $this->_language->load('template.common');
        $id = $this->filterInt( $this->_params[0]);
        $emp = EmployeeModel::getByPk($id);
        if($emp === false){
            $this->redirect('/employee');
        }
        $this->_data['employee'] = $emp;
        if(isset($_POST['submit'])){
            $emp->name = $this->filterString($_POST['name']);
            $emp->age = $this->filterInt($_POST['age']);
            $emp->address = $this->filterString($_POST['address']);
            $emp->salary = $this->filterFloat($_POST['salary']);
            $emp->tax = $this->filterFloat($_POST['tax']);
            if($emp->save()){
                $_SESSION['message'] = $emp->name.'  saved successfuly with ID:'.$emp->id;
                $this->redirect('/employee');
            }
        }
        $this->_view();
    }
    public function deleteAction()
    {
        $id = $this->filterInt( $this->_params[0]);
        $emp = EmployeeModel::getByPk($id);
        if($emp === false){
            $this->redirect('/employee');
        }
        if($emp->delete()){
            $_SESSION['message']='Employee, deleted successfuly';
            $this->redirect('/employee');
        }
        $this->_view();
    }
}