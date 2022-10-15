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

    <link rel="stylesheet" href="css/reservation.css ?v=<?php echo time()?>">

    <title>Room Reservation</title>

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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php #about">About</a></li>
                            <li><a href="index.php #team">Team</a></li>
                            <li><a href="index.php #gallery">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="banner_overlay">
            <div class="container">
                <div class="Reasevation_header">
                    <h2>Room Reservation</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="room_type">
                            <p> Deluxe Couple- ৳1750</p>
                            <p>Eco-twin- ৳2500</p>
                            <p> A/C single- ৳1550 </p>
                            <p> A/C couple- ৳1950 </p>
                            <p> Standered-twin- ৳2900</p>
                            <p>Delux family - ৳2050</p>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form">
                            <form action="" method="GET">
                                <table>
                                    <tr>
                                        <td>
                                            <level>Your Name :</level>
                                        </td>
                                        <td><input type="text" name="name" placeholder="Enter your name" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <level>Your Email :</level>
                                        </td>
                                        <td><input type="email" name="email" placeholder="Enter your email" required></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <level>Phone No :</level>
                                        </td>
                                        <td> <input type="number" name="phone" placeholder="+88" required></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <level>Address :</level>
                                        </td>
                                        <td> <input type="text" name="address" placeholder="Enter address" required></td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <lebel>Gender:</lebel>
                                        </td>
                                        <td> <select name="gender" required>
                                                <option>Select Gender </option>
                                                <option>Male </option>
                                                <option>Female </option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <lebel>Room type:</lebel>

                                        </td>

                                        <td>
                                            <select name="roomtype" required>
                                                <option>Select room </option>
                                                <option>Deluxe</option>
                                                <option>Eco-twin</option>
                                                <option>A/C single</option>
                                                <option>A/C couple</option>
                                                <option>Standered twin</option>
                                                <option>Deluxe Family</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <level>Day :</level>
                                        </td>
                                        <td>
                                            <input type="number" name="day" required>
                                        </td>
                                    </tr>

                                 

                                    <tr>
                                        <td><br></td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <level>Check-In :</level>
                                        </td>
                                        <td>
                                            <input type="date" placeholder="checkin date" name="checkin" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <level>Check-out:</level>
                                        </td>
                                        <td>
                                            <input type="date" name="checkout" placeholder="checkout date" required>
                                        </td>
                                    </tr>
                              

                                    <tr>
                                        <td>
                                            <div class="submit_button">
                                                <button name="reservation" value="submit" type="submit">Submit</button>
                                            </div>
                                        </td>

                                    </tr>


                                </table>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--banner area end-->

<?php
    
    if($_GET['reservation'])
    {
    $username = $_GET['username'];
    $email = $_GET['email'];
    $phn = $_GET['phone'];
    $address = $_GET['address'];
    $gender = $_GET['gender'];
    $roomtype = $_GET['roomtype'];
    $day = $_GET['day'];
    $checkin = $_GET['checkin']; 
    $checkout = $_GET['checkout'];
    
    $sql = "insert into reservation values('$username','$email','$phn','$address','$gender','$roomtype','$day','$checkin','$checkout')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
    echo "<script>alert('Successfully reserve room'); window.location='index.php'</script>";
    }
    else
    {
      echo "<script>alert('Reservation failed...'); window.location='reservation.php'</script>";
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
