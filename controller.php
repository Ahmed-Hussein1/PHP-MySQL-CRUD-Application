<?php 
//start connection
$connect = new PDO("mysql:host=localhost;dbname=phptrack" ,"root","");
//Query
$connect ->query("
insert into students(fname,lname,email,address)
values('{$_POST['fname']}','{$_POST['lname']}','{$_POST['email']}','{$_POST['address']}')
");

if($connect ->lastInsertId()==0){
    echo "<h1 style='color:red'>  Failed to Connect to Database...</h1>";
}else{
    header("location:list.php");
};

//end connection
$connect = null ;

?>