<?php
namespace app\controller;

use app\BaseController;

class User extends BaseController
{
    public function login()
    {
        return json($data);
    }
}
