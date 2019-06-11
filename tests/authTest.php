<?php
/**
 * Created by PhpStorm.
 * User: wxmai7
 * Date: 2019/6/11
 * Time: 17:03
 */

require_once __DIR__ . '/../vendor/autoload.php';

use TwTestPackage\Auth;

$auth = new Auth();
var_dump($auth->login([]));
