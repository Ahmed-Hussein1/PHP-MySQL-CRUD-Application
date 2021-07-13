<html>

<head>

    <link href="register.css" rel="stylesheet">
</head>

</head>

<body>
    <form method="post" action="controller.php">
        <div class="container">
            <h1>Registeration Form</h1>

            <hr>
            <p><b>First name</b>
                <input type="text" placeholder="Enter first name" name="fname" required>
            </p>

            <p><b>Last Name</b>
                <input type="text" placeholder="Enter last name" name="lname" required>
            </p>
            <p><b>Email</b>
                <input type="email" placeholder="Enter Email" name="email" required>
            </p>

            <p><b>Address</b></p>
            <p><textarea cols="25" maxlength="1000" name="address" rows="6" class="scrollabletextbox"></textarea></p>

     
         
            <button type="submit" class="btn" name="addstd"><b>Submit</b></button>
            <button type="reset" class="btn"><b>Resest</b></button>

        </div>

    </form>

</body>

</html>