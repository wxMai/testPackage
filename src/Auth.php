<?php
/**
 * Created by PhpStorm.
 * User: wxmai7
 * Date: 2019/6/11
 * Time: 17:02
 */

namespace TwTestPackage;

class Auth
{

    public function __construct()
    {

    }

    public function login($params)
    {
        return [
            'uid' => 1,
            'name' => 'diablo',
            'email' => 'iluozhiqiang@gmail.com',
            'version' => 'v1.0.1',
            'test' => 'test',
        ];
    }
    


}