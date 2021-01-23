<?php 
namespace app\database;

class class_dbabslayer{
    private $db;

    public function __construct(){
        $this->db = class_db::getinstance()->getdatabase();
    }

    public function getallusers($status){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE status_id=:status");
        $stmt->bindParam(":status",$status);
        $stmt->execute();

        // method1 bindColumn
        // $stmt->bindColumn("email",$email);
        // $stmt->bindColumn("password",$password);
        // $stmt->bindColumn("created_at",$created_at);

        // while($stmt->fetchObject()){
        //     echo "email is ${email} and password is ${password} , created at ${created_at}" . "<br/>";
        // }

        // method2 associative
        // $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        // foreach($result as $user){
        //     echo "email is " . $user["email"]. " and password is " . $user["password"]. " status id is " . $user["status_id"] . "<br/>";
        // }

        //method3 Object
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        foreach($result as $user){
            echo "email is " . $user->email. " and password is " . $user->password. " status id is " . $user->password . "<br/>";
        }
    }

    public function getsguser($id){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $stmt->bindColumn("email",$email);
        $stmt->bindColumn("password",$password);
        $stmt->bindColumn("status_id",$status_id);

        // method object
        // $result = $stmt->fetchObject();
        // echo "email is $result->email and password is $result->password and status id is $result->status_id";

        // method fetchArray
        $result = $stmt->fetch();
        echo "email is " . $result["email"] .  " and password is " . $result["password"];
    }

    public function deleteuser($id){
        $stmt = $this->db->prepare("DELETE FROM users WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $result = $stmt->execute();

        if($result){
            echo "Delete Successful";
        }else{
            echo "Delete Failed";
        }


    }


}
?>