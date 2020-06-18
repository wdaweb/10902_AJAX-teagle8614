<?php
include_once "base.php";

$db=new DB("students");
$id=$_POST['id'];

echo $db->del($id);

?>