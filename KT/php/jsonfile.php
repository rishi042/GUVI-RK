<?php
class mydetail
{
    public $name;
    public $age;
    public $email;

}

$myObj=new mydetail();

$myObj->name="Rishi";
$myObj->age=20;
$myObj->email="rishi@gmail.com";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
