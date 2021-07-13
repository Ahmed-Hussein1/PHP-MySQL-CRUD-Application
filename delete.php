
<?php 
//conecction
$connect = new PDO("mysql:host=localhost;dbname=phptrack" ,"root","");
//query
$studentData = $connect -> query("delete from students where id='{$_GET['id']}'");
header("location:list.php");

?>
