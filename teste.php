<?php
require_once("vendor/autoload.php");
    use \Hcode\DB\Sql;
    Use \Hcode\Model\User;
    $iduser =1;
    $user = new User();
    $user->get((int)$iduser);
    print_r($user);

?>