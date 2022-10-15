<?php
 include("connection.php");
 error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--font awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- google font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&family=Open+Sans:ital,wght@0,400;0,600;0,800;1,600&family=Oswald:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/login.css ?v=<?php echo time()?>">

    <title>Login</title>

</head>

<body>
    <!--banner area start-->
    <div class="banner">
        <!--header ares start-->
        <header class="header">
            <div class="container">
                <div class="menu_area">
                    <div class="logo">
                        <a href="index.php">Infinity Inn</a>
                    </div>
                    <nav class="nav">
                        <ul class="main-menu">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php #about" >About</a></li>
                            <li><a href="./index.php #team">Team</a></li>
                            <li><a href="index.php  #gallery">Gallery</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="banner_overlay">
            <div class="container">
                <div class="form_box">
                    <div class="button_box">
                        <a href="#"><button type="button" class="toggle-btn">Log In</button></a>
                        <a href="./registration.php"><button type="button" class="toggle-btn">Register</button></a>

                    </div>
                    <form id="login" class="input-group" method="post">
                        <input type="text" name="username" class="input-field" placeholder="Username" required>
                        <input type="password"  name="password" class="input-field" placeholder="Enter password" required>
                        <button type="submit" name="login" class="submit-btn">Log In</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php
 
 if(isset($_POST['login']))
 {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select username,password from registration where username='$username' and password='$password'";
    $check = mysqli_query($con,$query);
    $total = mysqli_num_rows($check);
    if($total==1)
    {
         echo "<script> window.location='reservation.php'</script>";
    }
     else{
         echo "<script>alert('Incorrect user name or password Try again...'); window.location='login.php'</script>";
     }
   
 }
    
 ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
