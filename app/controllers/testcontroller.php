<?php


namespace PHPMVC\Controllers;


use PHPMVC\LIB\Validate;
use PHPMVC\Models\UserGroupPrivilegeModel;

class TestController  extends AbstractController
{
use Validate;

    public function defaultAction()
    {

         var_dump($this->session->u->privileges);
    }
}