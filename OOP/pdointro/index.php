<?php
//php data object
//singleton design pattern
//data abstraction layer
require_once "vendor/autoload.php";

use app\database\class_db;
use app\database\class_dbabslayer;

class index{
    private $db;

    public function __construct(){
        // $this->db = new class_db();

        // $db1 = new class_db();
        // var_dump($db1);
        // echo "<br/>";

        // $db2 = new class_db();
        // var_dump($db2);
        // echo "<br/>";

        // $db3 = new class_db();
        // var_dump($db3);
        // echo "<br/>";

        // $db4 = new class_db();
        // var_dump($db4);
        // echo "<br/>";

        // $db5 = new class_db();
        // var_dump($db5);
        // echo "<br/>";

        $this->db = class_db::getinstance()->getdatabase();

        // $db1 = new class_db();
        // var_dump($db1);
        // echo "<br/>";

        // $db2 = new class_db();
        // var_dump($db2);
        // echo "<br/>";

        // $db3 = new class_db();
        // var_dump($db3);
        // echo "<br/>";

        // $db4 = new class_db();
        // var_dump($db4);
        // echo "<br/>";

        // $db5 = new class_db();
        // var_dump($db5);
        // echo "<br/>";

        $this->db = new class_dbabslayer();
        $this->db->getallusers(2);

        echo "<hr/>";

        $this->db->getsguser(2);

        echo "<hr/>";

        // $this->db->deleteuser(20);

        // $this->db->insertsguser("momo@gmail.com",123456,1);

        $users = [
            ["yoyo@gmail.com","123456",1],
            ["momo@gmail.com","123456",1],
            ["popo@gmail.com","123456",1],
            ["jojo@gmail.com","123456",1],
            ["vovo@gmail.com","123456",1],
        ];

        // $this->db->insertmultiusers($users);

        // $this->db->updateuserstatus(27,2);

        $this->db->getalluserbystatusname(2);

    }
}
$obj = new index();
?>
