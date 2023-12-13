<?php

include 'connect.php';
$email_err=$pws_err=$sucess=$error='';
if(isset($_POST['submit1']))
{
    $fname=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cppassword=$_POST['confirm_password'];

    $pass=password_hash($password, PASSWORD_BCRYPT);
    $cppass=password_hash($cppassword, PASSWORD_BCRYPT);

    $query="select * from register where email='$email'";
    $result=mysqli_query($con,$query);
    $row=mysqli_num_rows($result);
    if($row>0)
    {
        $email_err="email id is already exist. please enter another email";
    }
    else if($password !==$cppassword)
    {
        $pws_err="your password do not valid";
    }
    else
    {
        $sql="insert into register(name,email,password,confirm_password) values('$fname','$email','$pass','$cppass')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
            $sucess="Registered sucessfully";
        }
        else
        {
            $error="enable to submit data. please try again";
        }

    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    function content1()
    {
        document.getElementById("div1").style.display="block";
        document.getElementById("div2").style.display="none";
        
    }
    function content2()
    {
        document.getElementById("div1").style.display="none";
        document.getElementById("div2").style.display="block";
        
    }
</script>
</head>
<body>
    <section>
        <h2 class="text-center text-primary pt-5 pb-4 font-weight-bold">Student Management System</h2>
        <h4 class="text-center font-weight-bold text-danger"><?php echo @$_GET['error'] ?></h4>
        <div class="container bg-primary" id="formsetting">
            <h3 class="text-white text-center py-3 mt-6">Admin Login | Register Panel</h3>
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-12">
                        <img src='n2.jpg' class="img-fluid pt-6">
                    </div>
                    <div class="col-md-5 col-sm-5 col-12">
                        <button class="btn btn-dark px-5" onclick="content1()">Register</button>
                        <button class="btn btn-dark px-5" onclick="content2()">Login</button>
                        <div id="div1" style="display: block" class="mt-6">
              
                            <form action="" method="POST">
                            
                                <div class="form-group">
                                    <label class="text-white">Full Name</label>
                                    <input type="text" name="name" id="" placeholder="Enter Your Name" class="form-control" require="required">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Email</label>
                                    <span class="float-right text-white font-weight-bold"><?php echo $email_err; ?></span>
                                    <input type="email" name="email" id="" placeholder="Enter Your Email" class="form-control" require="required">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Password</label>
                                    <input type="password" name="password" id="" placeholder="Enter Password" class="form-control" require="required">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Confirm Password</label>
                                    <span class="float-right text-white font-weight-bold"><?php echo $pws_err; ?></span>
                                    <input type="password" name="confirm_password" id="" placeholder="RE-Enter Password" class="form-control" >
                                </div>
                                <input type="submit" name="submit1" value="Register" class="btn btn-success px-5">
                                <span class="float-right text-white font-weight-bold"><?php echo $sucess; echo $error; ?></span>
                                    
                            </form>
                        </div>
                        <div id="div2" style="display: none;" class="mt-6">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="text-white">Email</label>
                                    <input type="email" name="email" id="" placeholder="Enter Your Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-white">Password</label>
                                    <input type="password" name="password" id="" placeholder="Enter Password" class="form-control">
                                </div>
                                <input type="submit" name="submit" value="Login" class="btn btn-success px-5">
                            </form>
                        </div>
                
                    </div>

                    
                </div>
                
            
        </div>
    </section>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pwd=$_POST['password'];

    $query="select * from Register where email='$email'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($result);

    $p_fetch = $row['password'];
    $p_decode=password_verify($pwd,$p_fetch);

    if($p_decode)
    {
        echo "<script>window.open('next.php?success=loggedin successfully','_self')</script>";
    }
    else{
        echo "<script>window.open('index.php?error=Username or password is incorrect','_self')</script>";
 
    }
    
}

?>