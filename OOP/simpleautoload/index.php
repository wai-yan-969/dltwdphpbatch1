<?php
require_once "autoload/autoload.php";
class index{

    public function __construct(){

        autoload::myload("admin/class_admin");
        $admin = new class_admin();

        autoload::myload("auth/class_auth");
        $auth = new class_auth("aung aung",123456);
        $auth->accessinfo();
    }
}
$obj = new index();
?>
