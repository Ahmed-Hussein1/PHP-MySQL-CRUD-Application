<html> 
    <head>
    <link href="register.css" rel="stylesheet">

    </head>
</body>
<?php 
//conecction
$connect = new PDO("mysql:host=localhost;dbname=phptrack" ,"root","");
//query
$studentData = $connect -> query("select * from students where id='{$_GET['id']}'");
$result = $studentData ->fetch(PDO::FETCH_ASSOC);
?>
 <form method="post" action="update.php">
        <div class="container">
            <h1>Registeration Form</h1>

            <hr>
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <p><b>First name</b>
                <input type="text" placeholder="Enter first name" name="fname" value="<?php echo $result['fname'] ?>" required>
            </p>

            <p><b>Last Name</b>
                <input type="text" placeholder="Enter last name" name="lname" value="<?php echo $result['lname'] ?>" required>
            </p>
            <p><b>Email</b>
                <input type="email" placeholder="Enter Email" name="email" value="<?php echo $result['email'] ?>" required>
            </p>

            <p><b>Address</b></p>
            <p><input type="text" cols="25" maxlength="1000" name="address" value="<?php echo $result['address'] ?>"  rows="6" class="scrollabletextbox"></input></p>

     
         
            <button type="submit" class="btn" name="addstd"><b>Submit</b></button>
            <button type="reset" class="btn"><b>Resest</b></button>

        </div>

    </form>
</body>
</html>