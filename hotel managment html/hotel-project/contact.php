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
    <link rel="stylesheet" href="css/contact.css ?v=<?php echo time()?>">
    

    <title>Contact</title>

</head>

<body>
    <!--banner area start-->
    <div class="banner">
        <!--header ares start-->
        <header class="header">
            <div class="container">
                <div class="menu_area">
                                   <div class="row">
                    <div class="col-lg-5">
                        <div class="logo_img">
                            <img src="image/logo.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="logo">
                            <a href="index.php">Infinity Inn</a>
                        </div>
                    </div>
                </div
                    <nav class="nav">
                        <ul class="main-menu">
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./index.php #about" >About</a></li>
                            <li><a href="./index.php #team">Team</a></li>
                            <li><a href="index.php  #gallery">Gallery</a></li>
                            <li><a 
                            <li><a href="login.php">Log In</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="banner_overlay">
            <div class="container">
                <div class="contact_header">
                    <h2>CONTACT FORM</h2>
                </div>
                <div class="form">
                    <form action="" id="contact"  method="POST">
                        <div class="name">
                            <level>Your Name </level>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="email">
                            <level>Your Email </level> 
                            <input type="email" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="phn_no">
                            <level>Phone No </level>
                            <input type="number" name="phn_no" placeholder="+88" required>
                        </div>
                        <div class="message">
                            <level>Message </level>
                            <textarea cols="36" rows="5" name="message"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="contact" value="Contact">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    <?php
    
    if($_POST['contact'])
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phn = $_POST['phn_no'];
    $message = $_POST['message'];
    $sql = "insert into contact
 values('$username','$email','$phn','$message')";
    
    $result = mysqli_query($con,$sql);
    
    if($result)
    {
        echo "<script>alert('Message is submitted successfully'); window.location='contact.php'</script>";
    }
    else
    {
         echo "<script>alert('failed'); window.location='contact.php'</script>";
    }
}
    
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js,-lg then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
