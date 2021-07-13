<?php 
//start connection
$connect = new PDO("mysql:host=localhost;dbname=phptrack" ,"root","");
//Query
$connect ->query("
update students
set fname ='{$_POST['fname']}',lname='{$_POST['lname']}',email='{$_POST['email']}',address='{$_POST['address']}'
where students.id= '{$_POST['id']}'
");
header("location:list.php");
//end connection
$connect = null ;

?>