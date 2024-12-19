<?php
class connect
{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $stmt;
    function setdb($dbname,$query,$host="localhost",$user="root",$pwd=""){
        $this->stmt=new mysqli($host,$user,$pwd,$dbname);
        return $this->stmt->prepare($query);
        if ((new mysqli($host,$user,$pwd,$dbname))->connect_error) {
            die("Connection failed: " . (new mysqli($host,$user,$pwd,$dbname))->connect_error);
        }
    }
    // function __construct()
    // {
    // }
}
function create_table($existe,$statment){
    $connect= new connect();
    $query = "SHOW TABLES like '$existe';";
    $stmt = $connect->setdb("manager",$query); //tackes database name and the sql query
    // $stmt->bind_param("s", $existe);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    // var_dump(isset($row));
    if (!isset($row)) {
        $statment->execute();
        $statment->close();
    }
}
$connect= new connect();
function addproduct($name,$desc,$prix) {
    $connect->setdb("shop","INSERT INTO products(name,decription,prix) values(?,?,?);");
    $connect->bind_param("ssi",$name,$desc,$prix);
    $connect->execute();
}
$connect= new connect();
$stmat = $connect->setdb("shop","CREATE TABLE products(id int PRIMARY key AUTO_INCREMENT,name varchar(50) not null,decription varchar(255) not null,prix int);");
try{create_table("products",$stmat);}catch (\Throwable $th) {}


?>