<html>
    
    <body>
        <marquee behavior="" direction="" id="h2" onmouseover="stop()" onmouseout="start()"> Registraion Form</marquee>
        <form method = "POST">
            <label>Name</label>
            <input type="text" name="name"><br><br>
            <label>Username</label>
            <input type="text" name="username"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <label>Repassword</label>
            <input type="password" name="repassword"><br><br>
            <input type="submit" name="register"><br>
           
            <p> already registered?</p>
            <a href="loginpage.html">login</a>
        </form>
    </body>
</html>

<?php


if(isset($_POST['register'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword = $_POST['repassword'];
    if($password!=$repassword){
        echo "incorrect password Enter password again";
    }
    else{

        $conn=mysqli_connect('localhost','root','','tiranavind');
        if(!$conn){
            echo "couldn't connect";
        }
        else{
            echo "connected successfully";
            $q="INSERT INTO `tiranavind table`(name,username,password)VALUES('$name','$username','$password')";
            $query = mysqli_query($conn,$q);
            mysqli_close($conn);
        
        
        }
    }
}



?>
